<?php 

	class Config_Var extends CI_Model {

		protected static $table = "config_var";

		public $id;
		public $param;
		public $val;

		public $created_at;
		public $updated_at;

		public function __construct() {
			parent::__construct();
		}

		public function get_config_var($id) {
			$this->db->from(self::$table);
			$this->db->where('id', $id);
			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}

		public function add_config_var($data) {
			if($this->db->insert(self::$table, $data))
                return 1;
            else
                return 0;
		}

		public function edit_config_var($id, $data) {
			$this->db->where('id', $id);
            return $this->db->update(self::$table, $data);
		}

		public function delete_config_var($id) {
			if($this->db->delete(self::$table , array('id' => $id))) 
				return 1;
			else
				return 0;
		}

	}

?>