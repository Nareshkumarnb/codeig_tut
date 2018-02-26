<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class My_ctrlr extends CI_Controller{
    public function index(){
        $this->load->view('user_view');
    }
    public function test(){
        $this->load->model('googleauth');
        $fn = $this->googleauth->firstname();
        echo "$fn";
    }
}