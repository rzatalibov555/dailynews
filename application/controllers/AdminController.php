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


    public function news_create_act(){
        $title = $_POST['title'];
        $descr = $_POST['description'];
        $date = $_POST['date'];
        $category = $_POST['category'];
        $status = $_POST['status'];
        

        if(!empty($title) && !empty($descr) && !empty($date) && !empty($category) && !empty($status)){

            $data = [
                'n_title'       => $title,
                'n_description' => $descr,
                'n_date'        => $date,
                'n_category'    => $category,
                'n_status'      => $status,
                'n_create_date' => date("Y-m-d H:i:s"),
            ];
    
            $this->db->insert('news', $data);
            redirect(base_url('a_news_list'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

    }


}