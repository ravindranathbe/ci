<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asset extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Asset_model');
	}

	public function index() {
		$limit = 10;

		$data['asset_array'] = array('Id', 'IssueId', 'Description', 'Filename', 'PartPageContainerId', 'StatusId', 'PageType', 'PageSize', 'PageHeight', 'PageWidthfloat', 'OriginalFolioNumber', 'FinalStatus', 'FolioStatus', 'DispatchCount', 'AssetProgressId', 'Validate', 'CurrentFolio', 'FiveCol', 'ElementsAvailable');
		
		$data['asset_array'] = $this->Asset_model->get_entries($limit,  $this->uri->segment(4, 0));

		$config['base_url'] = base_url('asset/index/page/');
		$config['total_rows'] = $this->Asset_model->get_all_count();
		$config['per_page'] = $limit;
		$config['uri_segment'] = 4;
		$config['num_links'] = 2;

		$this->pagination->initialize($config);

		$data['page_title'] = 'Asset || Index';
		$data['main_content'] = $this->load->view('asset/index', $data, true);
		$this->load->view('main', $data);
	}

	public function search($search_val = '') {
		if($this->input->post('search_val', true) == '') {
			if($search_val == '') {
				redirect('asset/index');
			}
		} else {
			$search_val = $this->input->post('search_val', true);
		}

		$limit = 10;
		$data['search_val'] = $search_val;

		$data['asset_array'] = array('Id', 'IssueId', 'Description', 'Filename', 'PartPageContainerId', 'StatusId', 'PageType', 'PageSize', 'PageHeight', 'PageWidthfloat', 'OriginalFolioNumber', 'FinalStatus', 'FolioStatus', 'DispatchCount', 'AssetProgressId', 'Validate', 'CurrentFolio', 'FiveCol', 'ElementsAvailable');
		
		$data['asset_array'] = $this->Asset_model->get_search_entries($search_val, $limit,  $this->uri->segment(5, 0));

		$config['base_url'] = base_url('asset/search/'.$search_val.'/page/');
		$config['total_rows'] = $this->Asset_model->get_all_search_count($search_val);
		$config['per_page'] = $limit;
		$config['uri_segment'] = 5;
		$config['num_links'] = 2;

		$this->pagination->initialize($config);

		$data['page_title'] = 'Asset || Search';
		$data['main_content'] = $this->load->view('asset/search', $data, true);
		$this->load->view('main', $data);
	}

	public function sort($sort_field = 'Id', $sort_dir = 'asc') {
		$limit = 10;
		$data['sort_field'] = $sort_field;
		$data['sort_dir'] = $sort_dir;

		$data['asset_array'] = array('Id', 'IssueId', 'Description', 'Filename', 'PartPageContainerId', 'StatusId', 'PageType', 'PageSize', 'PageHeight', 'PageWidthfloat', 'OriginalFolioNumber', 'FinalStatus', 'FolioStatus', 'DispatchCount', 'AssetProgressId', 'Validate', 'CurrentFolio', 'FiveCol', 'ElementsAvailable');
		
		$data['asset_array'] = $this->Asset_model->get_sort_entries($sort_field, $sort_dir, $limit,  $this->uri->segment(6, 0));

		$config['base_url'] = base_url('asset/sort/'.$sort_field.'/'.$sort_dir.'/page/');
		$config['total_rows'] = $this->Asset_model->get_all_count();
		$config['per_page'] = $limit;
		$config['uri_segment'] = 6;
		$config['num_links'] = 2;

		$this->pagination->initialize($config);

		$data['page_title'] = 'Asset || Sort';
		$data['main_content'] = $this->load->view('asset/sort', $data, true);
		$this->load->view('main', $data);
	}

}