<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        //Load model
        $this->load->model('ProductModel');
    }
        
    public function index()
    {
        //Get data from the database
        $data['product'] = $this->product_model->get_product();
        
        //Load view
        $this->load->view('ProductView', $data);
    }
}