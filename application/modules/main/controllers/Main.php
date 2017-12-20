<?php 

	/**
	* 
	*/
	class Main extends CI_Controller {
		public function __construct() {
			parent::__construct();

			$this->load->model('Kategori');
			$this->load->model('Program_Data');

			$this->load->model('Program_Penyiar');
			
		}

		public function index() {

			/* Call Current Program Data Section ================================================================== */

			$current_radio = $this->Program_Data->get_program('program.tanggal = "' . date('Y-m-d') .'"', "program.id, program.id_kategori, kategori.kategori, program.waktu_start_jpn, program.waktu_end_jpn, program.waktu_start_ina, program.waktu_end_ina, program.thumbnail, program.judul, program.status", NULL, "program.id_kategori", "desc");

			if(!empty($current_radio)) {
				$data_current_radio = [];
				foreach ($current_radio as $crk => $crv) {
					$wrapper = [
						'id' => $crv->id,
						'id_kategori' => $crv->id_kategori,
						'kategori' => $crv->kategori,
						'waktu_start_jpn' => $crv->waktu_start_jpn,
						'waktu_end_jpn' => $crv->waktu_end_jpn,
						'waktu_start_ina' => $crv->waktu_start_ina,
						'waktu_end_ina' => $crv->waktu_end_ina,
						'thumbnail' => $crv->thumbnail,
						'judul' => $crv->judul,
						'status' => $crv->status,
						'penyiar' => $this->Program_Penyiar->get_program_penyiar($crv->id)
					];
					array_push($data_current_radio, $wrapper);
				}
			}
			else {
				$data_current_radio = [];
			}

			/* Call Close Program Data Section ==================================================================== */

			$data_close_program = [];

			foreach ($this->Kategori->get_kategori() as $katk => $katv) {
				$close_program = $this->Program_Data->get_program('program.id_kategori = ' . $katv->id , "program.id, program.id_kategori, kategori.kategori, program.waktu_start_jpn, program.waktu_end_jpn, program.waktu_start_ina, program.waktu_end_ina, program.thumbnail, program.judul, program.status", NULL, "program.tanggal", "desc");
				$data = [];
				foreach ($close_program as $crk => $crv) {
					$wrapper = [
						'id' => $crv->id,
						'id_kategori' => $crv->id_kategori,
						'kategori' => $crv->kategori,
						'waktu_start_jpn' => $crv->waktu_start_jpn,
						'waktu_end_jpn' => $crv->waktu_end_jpn,
						'waktu_start_ina' => $crv->waktu_start_ina,
						'waktu_end_ina' => $crv->waktu_end_ina,
						'thumbnail' => $crv->thumbnail,
						'judul' => $crv->judul,
						'status' => $crv->status,
						'penyiar' => $this->Program_Penyiar->get_program_penyiar($crv->id)
					];
					array_push($data, $wrapper);
				}

				$result_wrapper = [
					'id_kategori' => $katv->id,
					'kategori' => $katv->kategori,
					'thumbnail' => $katv->thumbnail,
					'deskripsi' => $katv->deskripsi,
					'hari' => $katv->hari,
					'program_start_jpn' => $katv->program_start_jpn,
					'program_end_jpn' => $katv->program_end_jpn,
					'program_start_ina' => $katv->program_start_ina,
					'program_end_ina' => $katv->program_end_ina,
					'program' => $data,
				];

				array_push($data_close_program, $result_wrapper);
			}


			/* Call Status Radio ================================================================================== */

			$status_radio = NULL;

			/* Header Section ===================================================================================== */
			
			$menu['selected'] = 'home';

			$interface['header'] = $this->load->view('common_modules/header', $menu, TRUE);

			/* Banner Section ===================================================================================== */

			$banner_data['radio'] = $data_current_radio;
			$interface['banner'] = $this->load->view('modules/banner', $banner_data, TRUE);

			/* Radio Section ====================================================================================== */
			
			$radio_player['radio'] = $data_current_radio;
			$interface['radio_player'] = $this->load->view('modules/radio_player', $radio_player, TRUE);

			/* About Section ====================================================================================== */

			$interface['about_radio'] = $this->load->view('modules/about_radio', NULL, TRUE);

			/* Program Section ==================================================================================== */

			$program_data['program_kategori'] = $this->Kategori->get_kategori();
			$program_data['close_program'] = $data_close_program;

			$interface['program'] = $this->load->view('modules/program', $program_data, TRUE);

			/* Request Section ==================================================================================== */

			$interface['request_lagu'] = $this->load->view('modules/request_lagu', NULL, TRUE);

			/* Footer Section ==================================================================================== */

			$interface['footer'] = $this->load->view('modules/footer', NULL, TRUE);

			$this->load->view('main', $interface);

		}
		
		public function get_data() {
			$data = $this->Materials->check_materials('id, content, status');

			if(!empty($data))
				foreach ($data as $mk => $mv)
					$this->Materials->edit_materials($mv->id, ['status' => 1]);

			header('Content-Type: application/json');
			echo json_encode($data);
		}

		public function put_data() {

			$data_close_program = [];

			foreach ($this->Kategori->get_kategori() as $katk => $katv) {
				$close_program = $this->Program_Data->get_program('program.id_kategori = ' . $katv->id , "program.id, program.id_kategori, kategori.kategori, program.waktu_start_jpn, program.waktu_end_jpn, program.waktu_start_ina, program.waktu_end_ina, program.thumbnail, program.judul, program.status", NULL, "program.tanggal", "desc");
				$data = [];
				foreach ($close_program as $crk => $crv) {
					$wrapper = [
						'id' => $crv->id,
						'id_kategori' => $crv->id_kategori,
						'kategori' => $crv->kategori,
						'waktu_start_jpn' => $crv->waktu_start_jpn,
						'waktu_end_jpn' => $crv->waktu_end_jpn,
						'waktu_start_ina' => $crv->waktu_start_ina,
						'waktu_end_ina' => $crv->waktu_end_ina,
						'thumbnail' => $crv->thumbnail,
						'judul' => $crv->judul,
						'status' => $crv->status,
						'penyiar' => $this->Program_Penyiar->get_program_penyiar($crv->id)
					];
					array_push($data, $wrapper);
				}

				$result_wrapper = [
					'id_kategori' => $katv->id,
					'kategori' => $katv->kategori,
					'thumbnail' => $katv->thumbnail,
					'deskripsi' => $katv->deskripsi,
					'hari' => $katv->hari,
					'program_start_jpn' => $katv->program_start_jpn,
					'program_end_jpn' => $katv->program_end_jpn,
					'program_start_ina' => $katv->program_start_ina,
					'program_end_ina' => $katv->program_end_ina,
					'program' => $data,
				];

				array_push($data_close_program, $result_wrapper);
			}

			
			echo json_encode($data_close_program);
		}

		public function window_radio() {
			$this->load->view('widget/radio');
		}

		public function service_jurnal() {

		}

		public function service_artikel() {

		}

		public function service_radio() {

		}
	}

?>