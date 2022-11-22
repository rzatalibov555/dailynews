<?php

class UserController extends CI_Controller{

    public function index(){
        //echo "index methodu";
        $this->load->view('user/index');
    }

    public function category(){
        $this->load->view('user/category');
    }

    public function contact(){
        $this->load->view('user/contact');
    }

    public function single(){
        $this->load->view('user/single');
    }
}