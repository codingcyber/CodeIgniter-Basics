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
		return $query->result_array();
		//$result = $query->result_array();
		//return $result;
	}
	
	// Insert Operation with Query Method
	public function queryinsert($fname, $lname, $email, $gender, $age){
		//
		$this->load->database();
		$query = $this->db->query("INSERT INTO `crud` (first_name, last_name, email_id, gender, age) VALUES ($fname, '$lname', '$email', '$gender', '$age')");
		//$result = $query->affected_array();
		//return $this->db->affected_rows();
		if($query){
			return true;
		}else{
			return false;
		}
	}
	
	// Update Operation with Query Method
	public function queryupdate($id, $fname, $lname, $email, $gender, $age){
		//UPDATE `crud` SET first_name='$fname', last_name='$lname', gender='$gender', age=$age, email_id='$email' WHERE id=$id
		$this->load->database();
		$query = $this->db->query("UPDATE `crud` SET first_name='$fname', last_name='$lname', gender='$gender', age=$age, email_id='$email' WHERE id=$id");
		//$result = $query->affected_array();
		//return $this->db->affected_rows();
		if($query){
			return true;
		}else{
			return false;
		}
	}
	
	// Delete Operation with Query Method
	public function querydelete(){
		
	}
}