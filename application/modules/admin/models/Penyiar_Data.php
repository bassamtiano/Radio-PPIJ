<?php
	
	class Penyiar_Data extends CI_Model {

		protected static $table = "penyiar";

		public $id;
		public $user_id;
		public $name;
		public $photo;
		public $about;

		public $created_at;
		public $updated_at;

		public function __construct() {
			parent::__construct();
		}

		public function get_penyiar($key , $column, $page, $page_limit, $sort_by = "penyiar.created_at", $order = "desc") {
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

		public function add_penyiar($data) {
			if($this->db->insert(self::$table, $data))
                return 1;
            else
                return 0;
		}

		public function edit_penyiar($id, $data) {
			$this->db->where('id', $id);
            return $this->db->update(self::$table, $data);
		}

		public function delete_penyiar($id) {
			if($this->db->delete(self::$table , array('id' => $id))) 
				return 1;
			else
				return 0;
		}


	}

?>