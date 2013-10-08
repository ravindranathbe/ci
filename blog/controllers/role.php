<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('role_model');
	}

	public function index()
	{
		$page_title = 'Role::Index';
		$main_content = '';

		// Get all roles - paginated
		$roleData = $this->role_model->getAllLimitPageSort();
		
		$main_content = $this->load->view('role/index', array('content' => $content), true);
		$this->load->view('main', array('page_title' => $page_title, 'main_content' => $main_content));
	}


}