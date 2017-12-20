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

		public function get_program($key , $column, $limit = NULL, $sort_by = "program.tanggal", $order = "desc") {

			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$this->db->order_by($sort_by ,$order);
			
			if($limit != NULL || !empty($limit))
				$this->db->limit($limit);

			$this->db->from(self::$table);

			if($key != NULL|| !empty($key) || $key != '') {
				$this->db->where($key);
			}

			$this->db->join('kategori', 'kategori.id = program.id_kategori');	

			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}

	}

?>