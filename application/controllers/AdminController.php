<?php 

class AdminController extends CI_Controller{

    public function index(){
        $this->load->view('admin/auth-login-basic');
    }

    public function dashboard(){
        $this->load->view('admin/index');
    }

    public function news_list(){
        $this->load->view('admin/news/list');
    }

    public function news_create(){
        $this->load->view('admin/news/create');
    }

}