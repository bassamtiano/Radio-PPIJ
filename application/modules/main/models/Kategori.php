<?php

	class Kategori extends CI_Model {
		
		protected static $table = "kategori";

		public $id;
		public $kategori;
		public $deskripsi;
		public $hari;
		public $program_start_ina;
		public $program_end_ina;
		public $program_start_jpn;
		public $program_end_jpn;

		public $created_at;

		public function __construct() {
			parent::__construct();
		}

		public function get_kategori($key = NULL , $column = NULL) {

			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$this->db->order_by('id' ,'asc');
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

		public function pagination_kategori($page_limit) {
			$this->db->select('kategori.id');
			$this->db->from(self::$table);
			
			$query = $this->db->get();
			return ceil($query->num_rows() / $page_limit);
		}

	}

?>