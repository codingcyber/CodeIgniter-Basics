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
}

