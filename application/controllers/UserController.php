<?php

class UserController extends CI_Controller{

    public function __constract(){
        parent::__constract();
        $this->lang->load('message','az');
    }

    public function index(){
        $data['slider_left_side'] = $this->db
            ->limit(10)
            ->order_by('n_date','DESC')
            ->where('n_status',"Active")
            ->join('category', 'category.c_id = news.n_category','left')
            ->get('news')->result_array();

        $data['slider_left_side_next'] = $this->db
            ->limit(10,10)
            ->order_by('n_date','DESC') 
            ->where('n_status',"Active")
            ->join('category', 'category.c_id = news.n_category','left')
            ->join('admin', 'admin.a_id = news.n_creator_id','left')
            ->get('news')->result_array();
         
        $data['idman'] = $this->db
            ->where('n_category', '1')
            ->order_by('n_date','DESC')
            ->where('n_status',"Active")
            ->join('category', 'category.c_id = news.n_category','left')
            ->get('news')->row_array();

        $data['medeniyyet'] = $this->db
            ->where('n_category', '2')
            ->order_by('n_date','DESC') 
            ->where('n_status',"Active")
            ->join('category', 'category.c_id = news.n_category','left')
            ->get('news')->row_array();

        $data['biznes'] = $this->db
            ->where('n_category', '3')
            ->order_by('n_date','DESC') 
            ->where('n_status',"Active")
            ->join('category', 'category.c_id = news.n_category','left')
            ->get('news')->row_array();

        $data['texnologiya'] = $this->db
            ->where('n_category', '4')
            ->order_by('n_date','DESC')
            ->where('n_status',"Active")
            ->join('category', 'category.c_id = news.n_category','left')
            ->get('news')->row_array();

        $data['category'] = $this->db->get('category')->result_array();
        

        //    print_r('<pre>');
        //    print_r($data['category']);
        //    die();

        $this->load->view('user/index',$data);
    }

    public function category($id){

        $id = $this->security->xss_clean($id);

        $data['category_of'] = $this->db
        ->order_by('n_date','DESC') 
        ->where('n_status',"Active")
        ->where('n_category',$id)
        ->join('category', 'category.c_id = news.n_category','left')
        ->get('news')->result_array();
        
        $data["limit_5_news"] = $this->db
        ->order_by("n_date","DESC")
        ->where('n_status',"Active")
        ->join('category', 'category.c_id = news.n_category','left')
        ->limit(5)
        ->get("news")
        ->result_array();
        
        // print_r('<pre>');
        // print_r($data["limit_5_news"]);
        // die();

        $data['category'] = $this->db->where('c_id',$id)->get('category')->row_array();
        
        $data['category_list'] = $this->db->get('category')->result_array();
        
        if($data['category']){
            $this->load->view('user/category',$data);
        }else{
            redirect(base_url('index'));
        }

        // $data['test'] = $this->db->query('SELECT * FROM `news` WHERE n_id = '.$id)->result_array();

        // print_r('<pre>');
        // print_r($data['test']);
        // die();
        
        
    }

    public function contact(){
        $this->load->view('user/contact');
    }

    public function single($id){
       
        $id = $this->security->xss_clean($id);

        $data['slider_left_side'] = $this->db
            ->limit(10)
            ->where('n_status',"Active")
            ->order_by('n_date','DESC')
            ->join('category', 'category.c_id = news.n_category','left')
            ->get('news')->result_array();

        $data['single_data'] = $this->db
        ->where('n_id',$id)
        ->join('category', 'category.c_id = news.n_category','left')
        ->join('admin', 'admin.a_id = news.n_creator_id','left')
        ->where('n_status',"Active")
        ->get("news")->row_array();


        $data["limit_5_news"] = $this->db
        ->order_by("n_date","DESC")
        ->where('n_status',"Active")
        ->join('category', 'category.c_id = news.n_category','left')
        ->limit(5)
        ->get("news")
        ->result_array();

        $data['category'] = $this->db->get('category')->result_array();

        // print_r('<pre>');
        // print_r($data['single_data']);
        // die();


        if($data['single_data']){
            $this->load->view('user/single',$data);
        }else{
            redirect(base_url('index'));
        }

        
    }

    public function send_message(){
        $email = $_POST['email'];

        if(!empty($email)){
            
            $data = [
                'u_e_mail' => $email,
            ];

            $data = $this->security->xss_clean($data);
            
            $this->db->insert('user_email_list',$data);
            $this->session->set_flashdata('ela', "E-poçt göndərildi!");
            redirect($_SERVER['HTTP_REFERER']);

        }else{
            $this->session->set_flashdata('err', "Boşluq buraxmayın!");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}