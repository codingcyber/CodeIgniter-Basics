<?php

/**
 * Crud_model
 *
 * @author vivekvengala
 */
class Dbtest_model extends CI_Model {
	// Read Operation with Query Method
	public function queryselect(){
		// we should load the database (autoload)
		$this->load->database();
		$query = $this->db->query('SELECT * FROM crud');
		$result = $query->result_array();
		return $result;
	}
	
	// Insert Operation with Query Method
	public function queryinsert(){
		
	}
	
	// Update Operation with Query Method
	public function queryupdate(){
		
	}
	
	// Delete Operation with Query Method
	public function querydelete(){
		
	}
}