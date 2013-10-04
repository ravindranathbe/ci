<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {

		$this->form_validation->set_rules('tableVal', 'Select table', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			redirect('tableman/index/'.$this->input->post('tableVal', true));
		}

		$tables = $this->db->list_tables();
		foreach($tables as $table) {
			$data['tablesOptions'][$table] = 'View '.$table;
		}

		$data['page_title'] = 'Home';
		$data['main_content'] = $this->load->view('home/index', $data, true);
		$this->load->view('main', $data);
	}

}