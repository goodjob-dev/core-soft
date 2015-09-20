<?php 

class Login extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	public function findUser( $username )
	{
		$query  = $this->db->select('id, password, name')
		
					 ->from  ('gs_admin_users')
					 ->where ('username', $username)
					 ->limit (1)
					 ->get   ();

		if( $query->num_rows() == 0 )
		{
			return FALSE;
		}
		return $query->result()[0];
	}
}	

?>