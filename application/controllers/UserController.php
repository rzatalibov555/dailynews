<?php

class UserController extends CI_Controller{

    public function index(){
        $data['slider_left_side'] = $this->db
            ->limit(10)
            ->order_by('n_id','DESC')
            ->join('category', 'category.c_id = news.n_category','left')
            ->get('news')->result_array();

        $data['idman'] = $this->db
            ->where('n_category', '1')
            ->order_by('n_id','DESC')
            ->join('category', 'category.c_id = news.n_category','left')
            ->get('news')->row_array();

        $data['medeniyyet'] = $this->db
            ->where('n_category', '2')
            ->order_by('n_id','DESC')
            ->join('category', 'category.c_id = news.n_category','left')
            ->get('news')->row_array();

        $data['biznes'] = $this->db
            ->where('n_category', '3')
            ->order_by('n_id','DESC')
            ->join('category', 'category.c_id = news.n_category','left')
            ->get('news')->row_array();

        $data['texnologiya'] = $this->db
            ->where('n_category', '4')
            ->order_by('n_id','DESC')
            ->join('category', 'category.c_id = news.n_category','left')
            ->get('news')->row_array();


//        print_r('<pre>');
//        print_r($data['texnologiya']);
//        die();

        $this->load->view('user/index',$data);
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