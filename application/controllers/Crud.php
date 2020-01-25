<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
    function index(){
        //echo "crud index controller";
        //$data['age'] = 20;
        $data['ages'] = array(20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);
        //$data['heading'] = "Create Operation in CRUD Application";
        $this->load->view('crud/templates/header');
        $this->load->view('crud/index', $data);
        $this->load->view('crud/templates/footer');
    }
    
    function edit($id){
        //echo "crud edit controller : ".$id;
        $data['id'] = $id;
        // based on this id, we will get the records from the database. Pass it to the edit view - model method
        
        $data['ages'] = array(20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);
        $data['firstname'] = "Vivek";
        $data['lastname'] = "Vengala";
        $data['email'] = "vivek@codingcyber.com";
        $data['gender'] = "male";
        $data['age'] = 22;
        
        $this->load->view('crud/templates/header');
        $this->load->view('crud/edit', $data);
        $this->load->view('crud/templates/footer');
    }
}

