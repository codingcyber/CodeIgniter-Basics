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
        $this->load->view('crud/index');
    }
}

