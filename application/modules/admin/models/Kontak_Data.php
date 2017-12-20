<?php

	/**
	* 
	*/
	class Kontak_Data extends CI_Model {
		
		protected static $table = "kontak";

		public $id;
		public $email;
		public $jenis_pesan;
		public $subject;
		public $konten;

		public $created_at;

		public function __construct() {
			parent::__construct();
		}

		public function get_kontak($key , $column, $page, $page_limit, $sort_by = "kontak.created_at", $order = "desc") {

			$page = $page - 1;

			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			if($page == 0)
				$page_start = 0;
			else
				$page_start = $page_limit * $page;

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

		public function pagination_kontak($page_limit) {
			$this->db->select('kontak.id');
			$this->db->from(self::$table);
			
			$query = $this->db->get();
			return ceil($query->num_rows() / $page_limit);
		}

	}


?>