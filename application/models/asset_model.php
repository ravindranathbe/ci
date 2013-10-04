<?php

class Asset_model extends CI_Model {

    var $id = '';
    var $issueid = '';
    var $description = '';
	var $filename = '';
	var $partpagecontainer = '';
	var $statusid = '';
	var $pagetype = '';
	var $pagesize = '';
	var $pageheight = '';
	var $pagewidth = '';
	var $originalfolionumber = '';
	var $finalstatus = '';
	var $foliostatus = '';
	var $dispatchcount = '';
	var $assetprogressid = '';
	var $validate = '';
	var $currentfolio = '';
	var $fivecol = '';
	var $elementsavailable = '';
	
    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_entries($limit = 0, $offset = 0) {
        $query = $this->db->get('tbl_asset', $limit, $offset);
        return $query->result_array();
    }

	function get_search_entries($search_val = '', $limit = 0, $offset = 0) {
		$this->db->like('Description', $search_val);
        $query = $this->db->get('tbl_asset', $limit, $offset);
        return $query->result_array();
    }

	function get_sort_entries($sort_field = 'Id', $sort_dir = 'asc', $limit = 0, $offset = 0) {
		$this->db->order_by($sort_field, $sort_dir);
        $query = $this->db->get('tbl_asset', $limit, $offset);
        return $query->result_array();
    }

	function get_all_count() {
		return $this->db->count_all('tbl_asset');
    }

	function get_all_search_count($search_val = '') {
		$this->db->like('Description', $search_val);
		$this->db->from('tbl_asset');
		return $this->db->count_all_results();
    }

    function insert_entry() {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry() {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}