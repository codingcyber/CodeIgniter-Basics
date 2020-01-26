<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
    // create operation
    function index(){
        //echo "crud index controller";
        //$data['age'] = 20;
        $data['ages'] = array(20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);
        //$data['heading'] = "Create Operation in CRUD Application";
        $this->load->view('crud/templates/header');
        $this->load->view('crud/index', $data);
        $this->load->view('crud/templates/footer');
    }
    
    // update operation
    function edit($id){
        //echo "crud edit controller : ".$id;
        $data['id'] = $id;
        // based on this id, we will get the records from the database. Pass it to the edit view - model method
        
        $this->load->model('crud_model');
        $userData = $this->crud_model->getRecord($id);
        $this->load->view('crud/templates/header');
        $this->load->view('crud/edit', $userData);
        $this->load->view('crud/templates/footer');
    }
    
    // create view controller & views - after trying watch this video
    // read operation
    function view(){
        //we will get the user information from model method - we will with sample data
        
        $this->load->model('crud_model');
        $user = $this->crud_model->getAll();
        
        // Controller - View - Model : MVC
        
        $this->load->view('crud/templates/header');
        $this->load->view('crud/view', $user);
        $this->load->view('crud/templates/footer');
    }
    
    // delete operation
    function delete($id){
        echo "delete controller method : " . $id;
        // we will pass this to model method for deleting the record.
    }
}

