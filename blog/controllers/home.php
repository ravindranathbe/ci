<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$page_title = '';
		$main_content = '';
		$this->load->view('main', array('page_title' => $page_title, 'main_content' => $main_content));
	}


}