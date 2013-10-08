<?php
class Role_model extends CI_Model {

	public function __construct()
	{
		
	}

	public function getAllLimitPageSort($limit = 10, $page = 0, $sort = 'asc')
	{
		$query = $this->db->query('CALL SP_ROLE_GET_ALL_LIMIT_PAGE_SORT("id", "'.$limit.'", "'.$page.'", "'.$sort.'")');
		return $query->result_array();
	}

}