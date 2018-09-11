<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        //Load model
        $this->load->model('home_model');
    }
        
    public function index()
    {
        //Get data from database
        $data['images'] = $this->home_model->get_images();
        
        //Load view
        $this->load->view('Home_view', $data);
    }
}