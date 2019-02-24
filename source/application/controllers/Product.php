<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function index()
    {
        $text = "some text ...";
        $data = array("message" => $text);
        $this->load->view("product/list", $data);
    }

}