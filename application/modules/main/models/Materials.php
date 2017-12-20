<?php

	/**
	* 
	*/
	class Materials extends CI_Model {
		
		protected static $table = "materials";

		public $id;
		public $content;
		public $status;

		public function __construct() {
			parent::__construct();
		}

		public function get_materials($column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$query = $this->db->get(self::$table);
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}

		public function check_materials($column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$this->db->select($column);
			$this->db->where('status', NULL);
			$query = $this->db->get(self::$table);
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}

		public function add_materials($data) {
			if($this->db->insert(self::$table, $data))
                return 1;
            else
                return 0;
		}

		public function edit_materials($id, $data) {
			$this->db->where('id', $id);
            return $this->db->update(self::$table, $data);
		}
		
	}

?>