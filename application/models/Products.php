<?php 

class Products extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	public function getAllProducts() {
		$query = $this->db->select('*')
						  ->from('gs_products')
						  ->order_by('id DESC')
						  ->get()
						  ->result();

		return $query;
	}

	public function getAllTabProducts() {
		$query = $this->db->select('*')
						  ->from('gs_products')
						  ->order_by('id DESC')
						  ->limit(3)
						  ->get()
						  ->result();

		return $query;
	}

	public function getAllProductsById($id) {
		$query = $this->db->select('*')
						  ->from('gs_products')
						  ->order_by('id DESC')
						  ->where('category_id', $id)
						  ->get()
						  ->result();

		return $query;
	}

	public function getAllSaleProducts() {
		$query = $this->db->select('*')
						  ->from('gs_products')
						  ->where('sale_price !=', 0)
						  ->order_by('id DESC')
						  ->get()
						  ->result();

		return $query;
	}

	public function getProductById($id) {
		$query = $this->db->select('*')
						  ->from('gs_products')
						  ->join('gs_product_info', 'gs_product_info.product_id = gs_products.id', 'left')
						  ->where('gs_products.id', $id)
						  ->get()
						  ->result();
		return $query[0];
	}
}	

?>