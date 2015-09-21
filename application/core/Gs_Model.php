<?php 

	class Gs_Model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function get( $query )
		{
			return $query->num_rows() == 0 ? FALSE : $query->result();
		}
		
		public function one( $query )
		{
			return $query->num_rows() == 0 ? FALSE : $query->row();
		}
	}
	
?>