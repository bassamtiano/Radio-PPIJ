<?php
	
	class Program_Data extends CI_Model {

		protected static $table = "program";

		public $id;
		public $id_kategori;
		public $tanggal;
		public $waktu_start_jpn;
		public $waktu_end_jpn;
		public $waktu_start_ina;
		public $waktu_end_ina;
		public $thumbnail;
		public $judul;
		public $status;
		public $artikel;
		public $podcast;

		public $created_at;
		public $updated_at;

		public function __construct() {
			parent::__construct();
		}

		public function get_program($key , $column, $page, $page_limit, $sort_by = "program.created_at", $order = "desc") {
			$page = $page - 1;

			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			if($page == 0)
				$page_start = 0;
			else
				$page_start = $page_limit * $page;

			$this->db->join('kategori', 'kategori.id = program.id_kategori');

			$this->db->order_by($sort_by ,$order);
			$this->db->limit($page_limit, $page_start);
			$this->db->from(self::$table);

			if($key != NULL|| !empty($key) || $key != '') {
				$this->db->where($key);
			}
			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}

		public function pagination_program($page_limit, $status) {
			$this->db->select('program.id');
			$this->db->from(self::$table);
			$this->db->where('status', $status);

			$query = $this->db->get();
			return ceil($query->num_rows() / $page_limit);
		}

		public function add_program($data) {
			if($this->db->insert(self::$table, $data))
                return 1;
            else
                return 0;
		}

		public function edit_program($id, $data) {
			$this->db->where('id', $id);
            return $this->db->update(self::$table, $data);
		}

		public function delete_program($id) {
			return $this->db->delete(self::$table , array('id' => $id));
		}


	}

?>