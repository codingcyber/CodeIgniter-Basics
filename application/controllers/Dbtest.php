<?php

/* 
 * DB Test Controller
 */

class Dbtest extends CI_Controller{
    
    // test the database connecion

    function databasetest() {
        $this->load->model('crud_model');
        $this->crud_model->dbtest();
    }

    // Query method to CRUD INSERT/SELECT/UPDATE/DELETE

    function viewdbtest() {
        $this->load->model('dbtest_model');
        $data['users'] = $this->dbtest_model->queryselect();

        $this->load->view('crud/templates/header');
        $this->load->view('crud/view', $data);
        $this->load->view('crud/templates/footer');
    }

    function insertdbtest() {
        $this->load->database();
        $this->load->model('dbtest_model');
        $fname = "Lis'a";
        $fname = $this->db->escape($fname); // while using the escape remove the quote marks in model method sql
        $lname = "Lopez";
        $email = "lisalopez@example.com";
        $gender = "female";
        $age = "25";
        $result = $this->dbtest_model->queryinsert($fname, $lname, $email, $gender, $age);
        if ($result) {
            echo "Record Inserted";
        } else {
            echo "Failed to Insert Record";
        }
    }

    function updatedbtest() {
        $this->load->model('dbtest_model');
        $fname = "Lisa2";
        $lname = "Lopez2";
        $email = "lisalopez2@example.com";
        $gender = "female";
        $age = "23";
        $id = 17;
        $result = $this->dbtest_model->queryupdate($id, $fname, $lname, $email, $gender, $age);
        if ($result) {
            echo "Record Updated";
        } else {
            echo "Failed to Update the Record";
        }
    }

    function deletedbtest() {
        $this->load->model('dbtest_model');
        $id = 18;
        $result = $this->dbtest_model->querydelete($id);
        if ($result) {
            echo "Record deleted";
        } else {
            echo "Failed to delete the Record";
        }
    }

    function viewtest() {
        $this->load->model('dbtest_model');
        $data['users'] = $this->dbtest_model->qbselect();

        $this->load->view('crud/templates/header');
        $this->load->view('crud/view', $data);
        $this->load->view('crud/templates/footer');
    }

    function inserttest() {
        $this->load->database();
        $this->load->model('dbtest_model');
        $result = $this->dbtest_model->qbinsert();
        if ($result) {
            echo "Record Inserted";
        } else {
            echo "Failed to Insert Record";
        }
    }
    
    function updatetest() {
        $this->load->model('dbtest_model');
        $id = 19;
        $result = $this->dbtest_model->qbupdate($id);
        if ($result) {
            echo "Record Updated";
        } else {
            echo "Failed to Update the Record";
        }
    }
    
    function deletetest() {
        $this->load->model('dbtest_model');
        $id = 15;
        $result = $this->dbtest_model->qbdelete($id);
        if ($result) {
            echo "Record deleted";
        } else {
            echo "Failed to delete the Record";
        }
    }
}

