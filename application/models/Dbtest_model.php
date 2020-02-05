<?php

/**
 * Crud_model
 *
 * @author vivekvengala
 */
class Dbtest_model extends CI_Model {

    // Read Operation with Query Method
    public function queryselect() {
        // we should load the database (autoload)
        $this->load->database();
        $query = $this->db->query('SELECT * FROM crud');
        return $query->result_array();
        //$result = $query->result_array();
        //return $result;
    }

    // Insert Operation with Query Method
    public function queryinsert($fname, $lname, $email, $gender, $age) {
        //
        $this->load->database();
        $query = $this->db->query("INSERT INTO `crud` (first_name, last_name, email_id, gender, age) VALUES ($fname, '$lname', '$email', '$gender', '$age')");
        //$result = $query->affected_array();
        //return $this->db->affected_rows();
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    // Update Operation with Query Method
    public function queryupdate($id, $fname, $lname, $email, $gender, $age) {
        //UPDATE `crud` SET first_name='$fname', last_name='$lname', gender='$gender', age=$age, email_id='$email' WHERE id=$id
        $this->load->database();
        $query = $this->db->query("UPDATE `crud` SET first_name='$fname', last_name='$lname', gender='$gender', age=$age, email_id='$email' WHERE id=$id");
        //$result = $query->affected_array();
        //return $this->db->affected_rows();
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    // Delete Operation with Query Method
    public function querydelete($id) {
        $this->load->database();
        $query = $this->db->query("DELETE FROM `crud` WHERE id=$id");
        //$result = $query->affected_array();
        //return $this->db->affected_rows();
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function qbselect() {
        $this->load->database();
        //$query = $this->db->get('crud', 5, 2); // limit, offset
        //$query = $this->db->get_where('crud', array('gender' => 'male'), 5, 2); // permits you to add a where clause in the second parameter, instead of using db->where() function
        // $this->db->select('first_name, last_name, email_id, gender, age, id'); // specific column names
        // $this->db->from('crud');
        // //$this->db->join('users', 'users.id=crud.id'); // for joining multiple tables
        // $query = $this->db->get();
        //$this->db->where('gender', 'male');
        //$this->db->where('first_name !=', 'vivek');
        //$this->db->or_where('id >', 4);
        //$query = $this->db->get('crud1');

        $where = "`gender` = 'male' AND `first_name` = 'Daniel'";
        $this->db->where($where);
        $query = $this->db->get('crud');

        return $query->result_array();
    }

    public function qbinsert() {
        $this->load->database();
        $data = array(
            'first_name' => 'Justine',
            'last_name' => 'Andrews',
            'gender' => 'male',
            'age' => '31',
            'email_id' => 'justine87@example.com'
        );
        $query = $this->db->insert('crud', $data);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function qbupdate($id) {
        $this->load->database();
        $data = array(
            'first_name' => 'Justine4',
            'last_name' => 'Andrews4',
            'gender' => 'male2',
            'age' => '29',
            'email_id' => 'justine872@example.com'
        );
        //$query = $this->db->update('crud', $data, "id => $id");
        $this->db->where('id', $id);
        $query = $this->db->update('crud', $data);
        
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function qbdelete($id) {
        $this->load->database();
        
        // $this->db->where('id', 14);
        // $query = $this->db->delete('crud');
        
        $query = $this->db->delete('crud', array('id' => $id));
        
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

}
