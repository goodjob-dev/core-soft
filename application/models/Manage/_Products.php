<?php 
	class _Products extends Gs_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function getAll( $l = null, $o = 0 )
		{		
			$this->db->select( 'gs_products.*, gs_categories.title as category_title, gs_product_info.availability, gs_product_analytics.sale_count, gs_product_analytics.view_count' )
					 ->from  ( 'gs_products' )
				     ->join  ( 'gs_categories', 'gs_products.category_id = gs_categories.id', 'left' )
				     ->join  ( 'gs_product_analytics', 'gs_product_analytics.product_id = gs_products.id', 'left' )
				     ->join  ( 'gs_product_info', 'gs_products.id = gs_product_info.product_id', 'left' )
				     ->order_by('id DESC');
			
			if( null != $l )
			{
				$this->db->limit( $l, $o );
			}
			
			return $this->get( $this->db->get() );
		}

		public function getProductByID($id) {
			$query = $this->db->select('gs_products.*, gs_product_info.description')
							  ->from('gs_products')
							  ->join('gs_product_info', 'gs_product_info.product_id = gs_products.id', 'left')
							  ->where('gs_products.id', $id)
							  ->get();

			return $this->one($query);
		}
	}
?>