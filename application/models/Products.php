<?php 

class Products extends Gs_Model
{	
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllProducts() 
	{	
		$this->db->select  ('*')
			     ->from    ('gs_products')
				 ->order_by('id DESC');
	
		return $this->get( $this->db->get() );
	}
	
	public function getAllTabProducts() 
	{
		return  $this->db->select('*')
						 ->from('gs_products')
						 ->order_by('id DESC')
						 ->limit(3)
						 ->get()
						 ->result();
	}

	public function getAllProductsById($id) 
	{
		return  $this->db->select('*')
						 ->from('gs_products')
						 ->order_by('id DESC')
						 ->where('category_id', $id)
						 ->get()
						 ->result();
	}

	public function getAllSaleProducts() 
	{
		return  $this->db->select('*')
						 ->from('gs_products')
						 ->where('sale_price !=', 0)
						 ->order_by('id DESC')
						 ->get()
						 ->result();
	}

	public function getProductById( $id ) 
	{
		$query = $this->db->select('*')
						  ->from('gs_products')
						  ->join('gs_product_info', 'gs_product_info.product_id = gs_products.id', 'left')
						  ->where('gs_products.id', $id)
						  ->get();
						  
		return $this->one($query);
	}

	public function getSearchProducts($search_term = null)
	{
		if($search_term == null) 
		{
			return FALSE;
		}

		$query = $this->db->select('*')
				          ->from('gs_products')
				          ->like('title', $search_term)
				          ->get();

		return $query->result();
	}
}	

?>