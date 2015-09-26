<?php
	class _ProductController extends Gs_Controller
	{
		/**
		 * Product limit for each page
		*/
		private $pr_l = 2;
		
		public function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
		}
		
		public function index()
		{
			$p = $this->input->get('p');
			$l = $this->pr_l;
			$o = 0;
			
			if( null !== $p )
			{
				$l = $this->pr_l;
				$o = $l * $p;
			}
			
			$this->load->model( 'manage/_products' );
		
			$this->render('products', 
			[
				'title'    => 'Products',
				'products' => $this->_products->getAll( $l, $o )
			]);
		}

		public function add()
		{
			
			$config = array(
				array(
					'field'	=> 'title', 
					'label'	=> 'Title', 
					'rules'	=> 'required'
				),
				array(
					'field'		=> 'category', 
					'label'		=> 'Category *', 
					'rules'		=> 'required'
				),
				array(
					'field'		=> 'regular_price', 
					'label'		=> 'Regular Price *', 
					'rules'		=> 'required'
				)
			);

			$this->form_validation->set_rules($config);


			
			
			
			


			if ($this->form_validation->run() == FALSE)
			{
				$this->load->model( 'Category' );
				$categories = $this->Category->getAllCategories();

				$this->render('add-product', 
				[
					'title'    => 'Add product',
					'categories' => $categories
				], 'form');
			}
			else
			{
				if($this->input->post('add_product'))
				{
					$post = $this->input->post();

					$extension = pathinfo($_FILES['product_image']['name'], PATHINFO_EXTENSION);

					$uploadConfig['upload_path']		= './uploads/products';
					$uploadConfig['allowed_types']		= 'gif|jpg|jpeg|png';
					$uploadConfig['file_name']			= md5($_FILES['product_image']['name'] . time() . '.' . $extension);

					$this->load->library('upload', $uploadConfig);
					$this->upload->do_upload('product_image');


					$sql1 = "INSERT INTO gs_products (`category_id`, `title`, `regular_price`, `sale_price`, `create_date`, `image`) VALUES (?, ?, ?, ?, ?, ?)";
					$sql2 = "INSERT INTO gs_product_info (`product_id`, `description`) VALUES (LAST_INSERT_ID(), ?)";

					$this->db->trans_start();
						$this->db->query($sql1, array($post['category'],$post['title'], $post['regular_price'], $post['sale_price'], time(), $uploadConfig['file_name']) );
						$this->db->query($sql2, array($post['description']));
					$this->db->trans_complete();

				}
				
			}

			
		}
	}
?>