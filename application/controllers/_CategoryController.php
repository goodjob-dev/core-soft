<?php


class _CategoryController extends Gs_Controller
{
	/**
	 * Product limit for each page
	*/
	private $pr_l = 2;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Category');
	}
	
	public function index()
	{
		
		$categories = $this->Category->getAllCategories();
		//$this->request->pr($categories);
	
		$this->render('categories', 
		[
			'title'			=> 'Categories',
			'categories'	=> $categories
		]);
	}

	public function add()
	{
		
		$config = array(
			array(
				'field'	=> 'title', 
				'label'	=> 'Title', 
				'rules'	=> 'required'
			)
		);

		$this->form_validation->set_rules($config);


		
		if ($this->form_validation->run() == FALSE)
		{

			$this->render('add-category', 
			[
				'title'    => 'Add category',
			], 'form');
		}
		else
		{
			if($this->input->post('add_category'))
			{	
				$post = $this->input->post();

				$data = array(
					'title'	=> $post['title'],
					'alias'	=> str_replace(' ', '', strtolower($post['title']))
				);

				$this->db->insert('gs_categories', $data); 

			}

			$this->request->redirectTo(base_url() . "manage/categories");
			
		}
		
	}

	public function edit($id)
	{
		if(!$id) {
			$this->request->redirectTo(base_url() . "manage/categories");
		}

		$config = array(
			array(
				'field'	=> 'title', 
				'label'	=> 'Title', 
				'rules'	=> 'required'
			)
		);

		$this->form_validation->set_rules($config);


		
		if ($this->form_validation->run() == FALSE)
		{
			$category = $this->Category->getCategoryByID($id);

			$this->render('edit-category', 
			[
				'title'    => 'Edit category',
				'category' => $category
			], 'form');
		}
		else
		{
			if($this->input->post('edit_category'))
			{	
				$post = $this->input->post();

				$data = array(
					'title' => $post['title'],
					'alias'	=> str_replace(' ', '', strtolower($post['title']))
				);

				$this->db->where('id', $id);
				$this->db->update('gs_categories', $data); 

			}

			$this->request->redirectTo(base_url() . "manage/categories");
			
		}
		
	}

	public function delete($id)
	{
		if($id)
		{
			$this->db->delete('gs_categories', array('id' => $id));
		}
		$this->request->redirectTo(base_url() . "manage/categories");
	}




}





?>