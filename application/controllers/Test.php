<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller{
    function index(){
        echo "Index method of test controller";
    }
    function test_index(){
        echo "Test Index method of test controller";
    }
}