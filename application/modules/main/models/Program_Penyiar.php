<?php 

	class Program_Penyiar extends CI_Model {

		protected static $table = "program_penyiar";

		public $id;
		public $id_program;
		public $id_penyiar;

		public $created_at;
		public $updated_at;

		public function __construct() {
			parent::__construct();
		}

		public function get_program_penyiar($id) {

			$this->db->from(self::$table);

			$this->db->where('id_program', $id);
			$this->db->join('penyiar', 'penyiar.id = program_penyiar.id_penyiar');	

			$query = $this->db->get();

			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}

	}

?>