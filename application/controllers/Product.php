<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        //Load model
        $this->load->model('product_model');
    }
        
    public function index()
    {
        //Get data from the database
        $data['product'] = $this->product_model->get_product();
        
        //Load view
        $this->load->view('Product_view', $data);
    }
}