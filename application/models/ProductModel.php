<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProductModel extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    // Function to query data
    public function getProduct()
    {
        $query = $this->db->query('select * from product');
        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
}