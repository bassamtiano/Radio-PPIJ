<?php

	/**
	* 
	*/
	class Jurnal_Data extends CI_Controller {
		
		public $id;
		public $title;
		public $thumbnail;
		public $content;
		public $status;
		public $author;

		public $created_at;
		public $updated_at;

		public function __construct() {
			parent::__construct();
		}

		public function get_jurnal_artikel($id, $kategori, $date, $column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$filtering = str_replace('_', ' ', $kategori);

			$this->db->where('status', 1);

			$date_start = $date . ' 00:0:01';
			$date_end = $date . ' 00:00:00';

			$this->db->where('jurnal.id', $id);
			//$this->db->where('jurnal.created_at <= ', $date_start);
			//$this->db->where('jurnal.created_at >= ', $date_end);
			$this->db->where('jurnal_kategori.kategori', $filtering);

			$this->db->join('jurnal_kategori', 'jurnal_kategori.id = jurnal.id_jurnal_kategori');	
			
			$query = $this->db->get(self::$table);
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data[0];
			// return $data;
		}
		
	}

?>