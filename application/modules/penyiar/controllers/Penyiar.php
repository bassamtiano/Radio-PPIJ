<?php 

	/**
	* 
	*/
	class Penyiar extends CI_Controller {
		public function __construct() {
			parent::__construct();

			
		}

		public function index() {

			// $data['data_materials'] = $this->Materials->get_materials('id, content, status');
			$menu['selected'] = 'All';
			$interface['header'] = $this->load->view('common_modules/header', $menu, TRUE);

			$interface['radio_player'] = $this->load->view('common_modules/radio_player', NULL, TRUE);

			$this->load->view('main', $interface);

		}
		
	}

?>