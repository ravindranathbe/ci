<?php

class Tableman_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_entries($table = '', $limit = 0, $offset = 0) {
        $query = $this->db->get($table, $limit, $offset);
        return $query->result_array();
    }

	function get_search_entries($table = '', $search_field = '', $search_val = '', $limit = 0, $offset = 0) {
		$this->db->like($search_field, $search_val);
        $query = $this->db->get($table, $limit, $offset);
        return $query->result_array();
    }

	function get_sort_entries($table = '', $sort_field = '', $sort_dir = '', $limit = 0, $offset = 0) {
		$this->db->order_by($sort_field, $sort_dir);
        $query = $this->db->get($table, $limit, $offset);
        return $query->result_array();
    }

	function get_all_count($table = '') {
		return $this->db->count_all($table);
    }

	function get_all_search_count($table = '', $search_field = '', $search_val = '') {
		$this->db->like($search_field, $search_val);
		$this->db->from($table);
		return $this->db->count_all_results();
    }

}