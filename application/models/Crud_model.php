<?php

/**
 * Crud_model
 *
 * @author vivekvengala
 */
class Crud_model extends CI_Model {
    
    public function getRecord($id){
        // we will get the record from the database, then we will return it to controller 
        
        // connecting to MySQL Database
        $user['ages'] = array(20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);
        $user['firstname'] = "Vivek";
        $user['lastname'] = "Vengala";
        $user['email'] = "vivek@codingcyber.com";
        $user['gender'] = "male";
        $user['age'] = 22;
        
        return $user;
    }
    
    public function getAll(){
        // we will get all the record from the database, then we will return it to view controller
        $data['users'][] = array('firstname' => 'Vivek', 'lastname' => 'Vengala', 'email' => 'vivek@codingcyber.com', 'gender' => 'male', 'age' => '28');
        $data['users'][] = array('firstname' => 'Vivek', 'lastname' => 'Vengala', 'email' => 'vivek@codingcyber.com', 'gender' => 'male', 'age' => '20');
        
        return $data;
    }
}
