<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {
    
    public function list_all()
    {
        $this->db->select("id, name, price"); // field names
        $result = $this->db->get("product")->result(); // table name
        return $result; // array with key = column
    }

}