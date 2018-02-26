<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_details extends CI_Controller{
    function index(){
        $this->load->model('user_model');
        $Array['data'] = $this->user_model->return_users();
        $this->load->view('user_view',$Array);
    }
}