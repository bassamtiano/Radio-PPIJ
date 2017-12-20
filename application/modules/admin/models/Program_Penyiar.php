<?php
	
	class Program_Penyiar extends CI_Model {

		protected static $table = "program_penyiar";

		public $id;
		public $id_program_penyiar;
		public $id_penyiar;

		public $created_at;
		public $updated_at;

		public function __construct() {
			parent::__construct();
		}

		public function search_program_penyiar($key) {

			$this->db->select('penyiar.id, penyiar.name, penyiar.photo');

			$this->db->from(self::$table);
			$this->db->join('penyiar', 'program_penyiar.id_penyiar = penyiar.id');

			$this->db->where($key);

			$query = $this->db->get();

			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}

		public function add_program_penyiar($data) {
			if($this->db->insert(self::$table, $data))
                return 1;
            else
                return 0;
		}

		public function edit_program_penyiar($id, $data) {
			$this->db->where('id', $id);
            return $this->db->update(self::$table, $data);
		}

		public function delete_program_penyiar($id) {
			$this->db->where('id', $id);
			$this->db->delete(self::$table);
		}


	}

?>