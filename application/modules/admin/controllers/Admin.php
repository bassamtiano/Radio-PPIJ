<?php
	
	class Admin extends CI_Controller {

		public function __construct() {
			parent::__construct();

			$this->load->model('Program_Data');
			$this->load->model('Kontak_Data');
			$this->load->model('Penyiar_Data');
			$this->load->model('Program_Penyiar');
			$this->load->model('Config_Var');

		}

		// private $base_url = $this->base_url() . '/admin/';

		public function index() {
			$interface_data = "program";

			$interface_header['active'] = 'main';
			
			// Content Yang ingin di tampilkan

			$interface['header'] = $this->load->view('modules/header', $interface_header, TRUE);
			$interface['content'] = $this->load->view('pages/home', $interface_data, TRUE);

			$interface['pagination'] = "";

			// Layout Admin

			$this->load->view('main', $interface);
		}

		/* About ============================================================================================== */

		public function about_modal_data() {
			echo json_encode($this->Config_Var->get_config_var('4'));
		}		

		public function about_update() {

		}

		/* Visi =============================================================================================== */

		public function visi_modal_data() {
			echo json_encode($this->Config_Var->get_config_var('1'));
		}

		public function visi_update() {

		}

		/* Misi =============================================================================================== */

		public function misi_modal_data() {
			echo json_encode($this->Config_Var->get_config_var('3'));
		}

		public function misi_update() {

		}

		/* Broadcast Status =================================================================================== */

		public function broadcast_status() {
			echo json_encode($this->Config_Var->get_config_var('2'));
		}

		public function broadcast_status_update($status) {

		}

		/* Banner ============================================================================================= */

		public function banner_modal_data() {
			
		}

		public function banner_add() {

		}

		public function banner_update() {

		}

		public function banner_remove() {

		}

		/* Broadcast Message ================================================================================== */

		public function broadcast_fetch() {

		}

		public function broadcast_add() {

		}

		public function broadcast_update() {
			
		}

		public function broadcast_remove() {

		}

		/* Program ============================================================================================ */

		public function program() {

			/* Data Handler Section =============================================================================== */

			$query = '';
			$key = NULL;
			$key_column = "judul";
			$sort_by = "program.created_at";
			$keyword = NULL;
			$order = 'desc';
			$column = 'program.id, program.id_kategori, kategori.kategori, program.tanggal, program.waktu_start_jpn, program.waktu_end_jpn, program.waktu_start_ina, program.waktu_end_ina, program.thumbnail, program.judul, program.status, program.created_at';

			if(!empty($this->input->get('key_column')))
				$key_column = $this->input->get('key_column');

			if(!empty($this->input->get('key')))
				$key = $this->input->get('key');
			
			if(!empty($this->input->get('sort_by')))
				$sort_by = $this->input->get('sort_by');
			
			if(!empty($key) && !empty($key_column))
				$keyword = $key_column . " LIKE '%" . $key . "%'";

			if(!empty($this->input->get('order')))
				$order = $this->input->get('order');

			$keyword .= 'status = 1';

			$program_data = $this->Program_Data->get_program($keyword, $column, 1, 10, $sort_by, $order);
			$result = [];

			foreach ($program_data as $ry => $rv) {
				array_push($result, [
					'id' => $rv->id,
					'id_kategori' => $rv->id_kategori,
					'kategori' => $rv->kategori,
					'tanggal' => $rv->tanggal,
					'waktu_start_jpn' => $rv->waktu_start_jpn,
					'waktu_end_jpn' => $rv->waktu_end_jpn,
					'waktu_start_ina' => $rv->waktu_start_ina,
					'waktu_end_ina' => $rv->waktu_end_ina,
					'thumbnail' => $rv->thumbnail,
					'judul' => $rv->judul,
					'status' => $rv->status,
					'penyiar' => $this->Program_Penyiar->search_program_penyiar('id_program = ' . $rv->id),
					'created_at' => $rv->created_at,
				]);
			}

			/* User Interface Section ============================================================================= */

			$interface_header['active'] = 'program';
			
			# Page Section =======================================================================================

			$interface_page['data'] = $result;
			$interface_data['page'] = $this->load->view('pages/modules/program_pages', $interface_page, TRUE);

			$interface_pagination['page_amount'] = $this->Program_Data->pagination_program(10, 1);
			
			$interface['header'] = $this->load->view('modules/header', $interface_header, TRUE);
			$interface['content'] = $this->load->view('pages/program', $interface_data, TRUE);
			$interface['pagination'] = $this->load->view('modules/pagination', $interface_pagination, TRUE);

			$this->load->view('main', $interface);

			//echo json_encode($result);

		}

		public function program_page($page = 1, $page_limit = 10) {

			/* Data Handler Section =============================================================================== */

			$query = '';
			$key = NULL;
			$key_column = "judul";
			$sort_by = "program.created_at";
			$keyword = NULL;
			$order = 'desc';
			$column = 'program.id, program.id_kategori, kategori.kategori, program.tanggal, program.waktu_start_jpn, program.waktu_end_jpn, program.waktu_start_ina, program.waktu_end_ina, program.thumbnail, program.judul, program.status, program.created_at';

			if(!empty($this->input->get('key_column')))
				$key_column = $this->input->get('key_column');

			if(!empty($this->input->get('key')))
				$key = $this->input->get('key');
			
			if(!empty($this->input->get('sort_by')))
				$sort_by = $this->input->get('sort_by');
			
			if(!empty($key) && !empty($key_column))
				$keyword = $key_column . " LIKE '%" . $key . "%'";

			if(!empty($this->input->get('order')))
				$order = $this->input->get('order');

			$keyword .= 'status = 1';

			$program_data = $this->Program_Data->get_program($keyword, $column, 1, 10, $sort_by, $order);
			$result = [];

			foreach ($program_data as $ry => $rv) {
				array_push($result, [
					'id' => $rv->id,
					'id_kategori' => $rv->id_kategori,
					'kategori' => $rv->kategori,
					'tanggal' => $rv->tanggal,
					'waktu_start_jpn' => $rv->waktu_start_jpn,
					'waktu_end_jpn' => $rv->waktu_end_jpn,
					'waktu_start_ina' => $rv->waktu_start_ina,
					'waktu_end_ina' => $rv->waktu_end_ina,
					'thumbnail' => $rv->thumbnail,
					'judul' => $rv->judul,
					'status' => $rv->status,
					'penyiar' => $this->Program_Penyiar->search_program_penyiar('id_program = ' . $rv->id),
					'created_at' => $rv->created_at,
				]);
			}

			/* User Interface Section ============================================================================= */

			# Header Section =====================================================================================

			$interface_header['active'] = 'program';

			# Page Section =======================================================================================

			$interface_page['data'] = $result;
			$interface_data['page'] = $this->load->view('pages/modules/program_pages', $interface_page, TRUE);
			
			# Pagination Section =================================================================================

			$interface_pagination['page_amount'] = $this->Program_Data->pagination_program(10, 1);

			$interface['header'] = $this->load->view('modules/header', $interface_header, TRUE);
			$interface['content'] = $this->load->view('pages/program', $interface_data, TRUE);
			$interface['pagination'] = $this->load->view('modules/pagination', $interface_pagination, TRUE);

			$this->load->view('main', $interface);

		}

		public function program_modal_data() {
			$result = $this->Program_Data->get_program('id = ' . $this->input->get('id') . ' AND status = 1 ', '*', 1, 1, NULL, NULL);
			echo json_encode($result);
		}

		public function program_add() {
			$data = [

			];
		}

		public function program_update() {
			$data = [

			];
		}

		public function program_remove() {
			$this->Program_Data->delete_program($this->input->post('id'));
		}

		public function program_category_modal_data() {

		}

		public function program_category_add() {

		}

		public function program_category_update() {

		}

		public function program_category_remove() {

		}

		/* Previously ========================================================================================= */

		public function previously() {

			/* Data Handler Section =============================================================================== */

			$query = '';
			$key = NULL;
			$key_column = "judul";
			$sort_by = "program.created_at";
			$keyword = NULL;
			$order = 'desc';
			$column = 'program.id, program.id_kategori, kategori.kategori, program.tanggal, program.waktu_start_jpn, program.waktu_end_jpn, program.waktu_start_ina, program.waktu_end_ina, program.thumbnail, program.judul, program.status, program.created_at';

			if(!empty($this->input->get('key_column')))
				$key_column = $this->input->get('key_column');

			if(!empty($this->input->get('key')))
				$key = $this->input->get('key');
			
			if(!empty($this->input->get('sort_by')))
				$sort_by = $this->input->get('sort_by');
			
			if(!empty($key) && !empty($key_column))
				$keyword = $key_column . " LIKE '%" . $key . "%' AND ";

			if(!empty($this->input->get('order')))
				$order = $this->input->get('order');

			$keyword .= 'status = 2 or status = 3';

			$program_data = $this->Program_Data->get_program($keyword, $column, 1, 10, $sort_by, $order);
			$result = [];

			foreach ($program_data as $ry => $rv) {
				array_push($result, [
					'id' => $rv->id,
					'id_kategori' => $rv->id_kategori,
					'kategori' => $rv->kategori,
					'tanggal' => $rv->tanggal,
					'waktu_start_jpn' => $rv->waktu_start_jpn,
					'waktu_end_jpn' => $rv->waktu_end_jpn,
					'waktu_start_ina' => $rv->waktu_start_ina,
					'waktu_end_ina' => $rv->waktu_end_ina,
					'thumbnail' => $rv->thumbnail,
					'judul' => $rv->judul,
					'status' => $rv->status,
					'penyiar' => $this->Program_Penyiar->search_program_penyiar('id_program = ' . $rv->id),
					'created_at' => $rv->created_at,
				]);
			}
			

			/* User Interface Section ============================================================================= */

			# Header Section =====================================================================================

			$interface_header['active'] = 'previously';

			# Page Section =======================================================================================

			$interface_page['data'] = $result;
			$interface_data['page'] = $this->load->view('pages/modules/previously_pages', $interface_page, TRUE);

			$interface_page['modal'] = '';
			
			# Pagination Section =================================================================================

			$interface_pagination['page_amount'] = $this->Program_Data->pagination_program(10, 1);
			
			$interface['header'] = $this->load->view('modules/header', $interface_header, TRUE);
			$interface['content'] = $this->load->view('pages/previously', $interface_data, TRUE);
			$interface['pagination'] = $this->load->view('modules/pagination', $interface_pagination, TRUE);

			$this->load->view('main', $interface);

		}

		public function previously_page($page = 1, $page_limit = 10) {

			/* Data Handler Section =============================================================================== */

			$query = '';
			$key = NULL;
			$key_column = "judul";
			$sort_by = "program.created_at";
			$keyword = NULL;
			$order = 'desc';
			$column = 'program.id, program.id_kategori, kategori.kategori, program.tanggal, program.waktu_start_jpn, program.waktu_end_jpn, program.waktu_start_ina, program.waktu_end_ina, program.thumbnail, program.judul, program.status, program.created_at';

			if(!empty($this->input->get('key_column')))
				$key_column = $this->input->get('key_column');

			if(!empty($this->input->get('key')))
				$key = $this->input->get('key');
			
			if(!empty($this->input->get('sort_by')))
				$sort_by = $this->input->get('sort_by');
			
			if(!empty($key) && !empty($key_column))
				$keyword = $key_column . " LIKE '%" . $key . "%' AND ";

			if(!empty($this->input->get('order')))
				$order = $this->input->get('order');

			$keyword .= 'status = 2 or status = 3';

			$result = $this->Program_Data->get_program($keyword, $column, $page, $page_limit, $sort_by, $order);
			
			/* User Interface Section ============================================================================= */

			# Header Section =====================================================================================

			$interface_header['active'] = 'previously';

			# Page Section =======================================================================================

			$interface_page['data'] = $result;
			$interface_data['page'] = $this->load->view('pages/modules/previously_pages', $interface_page, TRUE);
			
			# Pagination Section =================================================================================

			$interface_pagination['page_amount'] = $this->Program_Data->pagination_program(10, 1);
			
			$interface['header'] = $this->load->view('modules/header', $interface_header, TRUE);
			$interface['content'] = $this->load->view('pages/previously', $interface_data, TRUE);
			$interface['pagination'] = $this->load->view('modules/pagination', $interface_pagination, TRUE);

			$this->load->view('main', $interface);

		}

		public function previously_modal_data() {
			$result = $this->Program_Data->get_program('id = ' . $this->input->get('id') . ' AND status = 2', '*', 1, 1, NULL, NULL);
			echo json_encode($result);
		}

		public function previously_article() {
			$interface_data = "previously";

			$interface_header['menu'] = [
				'Main' => ['status' => 1, 'url' => ''],
				'About' => ['status' => 0, 'url' => 'about'],
				'Privacy Policy' => ['status' => 0, 'url' => 'private_policy'],
			];
			$interface_header['active'] = 'previously';
			
			$interface['header'] = $this->load->view('modules/header', $interface_header, TRUE);
			$interface['content'] = $this->load->view('pages/modules/article', $interface_data, TRUE);

			$this->load->view('main', $interface);
		}

		public function previously_publish() {

		}

		public function previously_unpublished() {

		}

		public function previously_update() {

		}

		/* Kontak ============================================================================================= */

		public function kontak() {

			/* Data Handler Section =============================================================================== */

			$key = NULL;
			$key_column = "email";
			$sort_by = "kontak.created_at";
			$keyword = NULL;
			$order = 'desc';

			if(!empty($this->input->get('key_column')))
				$key_column = $this->input->get('key_column');

			if(!empty($this->input->get('key')))
				$key = $this->input->get('key');
			
			if(!empty($this->input->get('sort_by')))
				$sort_by = $this->input->get('sort_by');
			
			if(!empty($key) && !empty($key_column))
				$keyword = $key_column . " LIKE '%" . $key . "%'";

			if(!empty($this->input->get('order')))
				$order = $this->input->get('order');

			$result = $this->Kontak_Data->get_kontak( $keyword, '*', 1, 10, $sort_by, $order);

			/* User Interface Section ============================================================================= */

			# Header Section =====================================================================================

			$interface_header['active'] = 'kontak';

			# Page Section =======================================================================================

			$interface_data = "";
			
			# Pagination Section =================================================================================

			$interface_pagination['page_amount'] = $this->Program_Data->pagination_program(10, 1);


			$interface['header'] = $this->load->view('modules/header', $interface_header, TRUE);
			$interface['content'] = $this->load->view('pages/kontak', $interface_data, TRUE);
			$interface['pagination'] = $this->load->view('modules/pagination', $interface_pagination, TRUE);

			$this->load->view('main', $interface);

		}

		public function kontak_page($page = 1, $page_limit = 10) {

			/* Data Handler Section =============================================================================== */

			$key = NULL;
			$key_column = "email";
			$sort_by = "kontak.created_at";
			$keyword = NULL;
			$order = 'desc';

			if(!empty($this->input->get('key_column')))
				$key_column = $this->input->get('key_column');

			if(!empty($this->input->get('key')))
				$key = $this->input->get('key');
			
			if(!empty($this->input->get('sort_by')))
				$sort_by = $this->input->get('sort_by');
			
			if(!empty($key) && !empty($key_column))
				$keyword = $key_column . " LIKE '%" . $key . "%'";

			if(!empty($this->input->get('order')))
				$order = $this->input->get('order');

			$result = $this->Kontak_Data->get_kontak( $keyword, '*', $page, $page_limit, $sort_by, $order);

			/* User Interface Section ============================================================================= */

			# Header Section =====================================================================================

			$interface_header['active'] = 'kontak';

			# Page Section =======================================================================================

			$interface_data = "";
			
			# Pagination Section =================================================================================

			$interface_pagination['page_amount'] = $this->Program_Data->pagination_program(10, 1);


			$interface['header'] = $this->load->view('modules/header', $interface_header, TRUE);
			$interface['content'] = $this->load->view('pages/kontak', $interface_data, TRUE);
			$interface['pagination'] = $this->load->view('modules/pagination', $interface_pagination, TRUE);

			$this->load->view('main', $interface);
			

		}

		/* Penyiar ============================================================================================ */

		public function penyiar() {

			/* Data Handler Section =============================================================================== */

			$key = NULL;
			$key_column = "user_id";
			$sort_by = "penyiar.created_at";
			$keyword = NULL;
			$order = 'desc';

			$keyword = "";

			if(!empty($this->input->get('key_column')))
				$key_column = $this->input->get('key_column');

			if(!empty($this->input->get('key')))
				$key = $this->input->get('key');
			
			if(!empty($this->input->get('sort_by')))
				$sort_by = $this->input->get('sort_by');
			
			if(!empty($key) && !empty($key_column))
				$keyword = $key_column . " LIKE '%" . $key . "%'";

			if(!empty($this->input->get('order')))
				$order = $this->input->get('order');

			$result = $this->Penyiar_Data->get_penyiar($keyword , '*', 1, 10, $sort_by = "penyiar.created_at", $order = "desc");

			/* User Interface Section ============================================================================= */

			$interface_data = "penyiar";
			$interface_header['active'] = 'penyiar';

			$interface_pagination['page_amount'] = $this->Program_Data->pagination_program(10, 1);

			$interface['header'] = $this->load->view('modules/header', $interface_header, TRUE);
			$interface['content'] = $this->load->view('pages/penyiar', $interface_data, TRUE);

			$interface['pagination'] = $this->load->view('modules/pagination', $interface_pagination, TRUE);

			$this->load->view('main', $interface);
		}


		public function penyiar_page($page = 1, $page_limit = 10) {
			
			/* Data Handler Section =============================================================================== */

			$key = NULL;
			$key_column = "user_id";
			$sort_by = "penyiar.created_at";
			$keyword = NULL;
			$order = 'desc';

			$keyword = "";

			if(!empty($this->input->get('key_column')))
				$key_column = $this->input->get('key_column');

			if(!empty($this->input->get('key')))
				$key = $this->input->get('key');
			
			if(!empty($this->input->get('sort_by')))
				$sort_by = $this->input->get('sort_by');
			
			if(!empty($key) && !empty($key_column))
				$keyword = $key_column . " LIKE '%" . $key . "%'";

			if(!empty($this->input->get('order')))
				$order = $this->input->get('order');

			$result = $this->Penyiar_Data->get_penyiar($keyword , '*', $page, $page_limit, $sort_by = "penyiar.created_at", $order = "desc");

			/* User Interface Section ============================================================================= */

			$interface_data = "penyiar";
			$interface_header['active'] = 'penyiar';

			$interface_pagination['page_amount'] = $this->Program_Data->pagination_program(10, 1);

			$interface['header'] = $this->load->view('modules/header', $interface_header, TRUE);
			$interface['content'] = $this->load->view('pages/penyiar', $interface_data, TRUE);

			$interface['pagination'] = $this->load->view('modules/pagination', $interface_pagination, TRUE);

			$this->load->view('main', $interface);


		}

		public function penyiar_add() {

		}

		public function penyiar_update() {

		}

		public function penyiar_remove() {

		}

		/* Galery ============================================================================================= */

		public function galery() {

			$interface_header['active'] = 'galery';
			
			$interface['pagination'] = "";
			$interface['header'] = $this->load->view('modules/header', $interface_header, TRUE);

			$interface_data = NULL;

			$interface_pagination['page_amount'] = $this->Program_Data->pagination_program(10, 1);

			$interface['content'] = $this->load->view('pages/penyiar', NULL, TRUE);

			$interface['pagination'] = $this->load->view('modules/pagination', $interface_pagination, TRUE);

			$this->load->view('main', $interface);	
		}

		public function galery_page() {

		}

		/* Album ============================================================================================== */

		public function album_data(){

		}

		public function album_add() {

		}

		public function album_update() {

		}

		public function album_remove() {

		}

		/* Pictures =========================================================================================== */
		
		public function picture_data(){

		}

		public function picture_add() {

		}

		public function picture_update() {

		}

		public function picture_remove() {

		}

		public function jenis() {
			session_start();
			require_once("twitteroauth/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
			 
			$twitteruser = "bassamtiano";
			$notweets = 30;
			$consumerkey = "12345";
			$consumersecret = "123456789";
			$accesstoken = "123456789";
			$accesstokensecret = "12345";
			 
			function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
			  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
			  return $connection;
			}
			 
			$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
			 
			$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
			 
			echo json_encode($tweets);
		}


	}

?>