<?php

	/**
	* 
	*/
	class Previously extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$menu['selected'] = 'All';
			$interface['header'] = $this->load->view('common_modules/header', $menu, TRUE);
			
			$interface['radio_player'] = $this->load->view('common_modules/radio_player', NULL, TRUE);
			
			//$interface['request_lagu'] = $this->load->view('common_modules/request_lagu', NONE, TRUE);

			$interface['footer'] = $this->load->view('common_modules/footer', NULL, TRUE);

			$this->load->view('main', $interface);
		}

		public function program($kategori, $year, $month, $day, $id) {

			$column = 'jurnal.id as id, jurnal.title as title, jurnal_kategori.kategori as kategori, jurnal.thumbnail as thumbnail, jurnal.content, jurnal.created_at, jurnal.author';

			$data = $this->Jurnal_Data->get_jurnal_artikel($id, $kategori, $year . '-' . $month . '-' . $day, $column);

			$menu['selected'] = $kategori;
			$menu['content'] = $this->jurnal_Kategori->get_jurnal_kategori('kategori');

			$sub_interface['menu'] = $this->load->view('modules/menu', $menu, TRUE);
			$sub_interface['data'] = $this->Jurnal_Data->get_jurnal_artikel($id, $kategori, $year . '-' . $month . '-' . $day, $column);
			
			$sub_interface['facebook_thumbnail'] = $sub_interface['data']->thumbnail;
			
			$interface['title'] = "Jurnal - " . $sub_interface['data']->title;
			$interface['content'] = $this->load->view('pages/artikel', $sub_interface, TRUE);
			$this->load->view('main', $interface);

		}
		
		
	}

?>