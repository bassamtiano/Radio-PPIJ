<?php 

	/**
	* 
	*/
	class Kontak extends CI_Controller {
		public function __construct() {
			parent::__construct();

		}

		public function index() {

			// $data['data_materials'] = $this->Materials->get_materials('id, content, status');
			$menu['selected'] = 'All';
			$interface['header'] = $this->load->view('modules/header', $menu, TRUE);
			$interface['about_radio'] = $this->load->view('modules/about_radio', NULL, TRUE);
			$interface['radio_player'] = $this->load->view('modules/radio_player', NULL, TRUE);
			$interface['program'] = $this->load->view('modules/program', $menu, TRUE);
			$interface['request_lagu'] = $this->load->view('modules/request_lagu', NULL, TRUE);

			$interface['footer'] = $this->load->view('modules/footer', NULL, TRUE);

			$this->load->view('main', $interface);

		}
		
	}

?>