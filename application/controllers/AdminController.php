<?php 

class AdminController extends CI_Controller{

    public function index(){
        $this->load->view('admin/auth-login-basic');
    }

    public function dashboard(){
        $this->load->view('admin/index');
    }


    // result_array()   - 1den cox melumatin gelmesi ucundur (array kimi)     []
    // row_array()      - yalniz 1 setirin getirilmesi ucundur (array kimi)   []

    // result()         - 1den cox melumatin gelmesi ucundur (object kimi)    ->
    // row()            - yalniz 1 setirin getirilmesi ucundur (object kimi)  ->



    public function news_list(){
        $data["get_all"] = $this->db->order_by('n_id','DESC')->get("news")->result();

        // echo "controllerden gelen";
        // print_r('<pre>');
        // print_r($data["get_all"]);
        // die();

        $this->load->view('admin/news/list',$data);
    }

    public function news_create(){
        $this->load->view('admin/news/create');
    }


    public function news_create_act(){

        // STEP1 = get all input names

        $title      = $_POST['title'];
        $descr      = $_POST['description'];
        $date       = $_POST['date'];
        $category   = $_POST['category'];
        $status     = $_POST['status'];
        
        // STEP2 = check input names value
        if(!empty($title) && !empty($descr) && !empty($date) && !empty($category) && !empty($status)){

            // https://codeigniter.com/userguide3/libraries/file_uploading.html
            // --------- FILE UPLOAD (File yuklenmesi) ----------------------------------------
            $config['upload_path']          = './uploads/news/';
            $config['allowed_types']        = 'gif|jpg|png|mp3|jpeg';
            $config['remove_spaces']        = true;
            // $config['encrypt_name']         = true;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            

            if($this->upload->do_upload('image')){
                $upload_name = $this->upload->data('file_name');
                $upload_ext = $this->upload->data('file_ext');
                // ------------------------------------------------------
                
                // STEP3 = push all input values in array
                $data = [
                    'n_title'       => $title,
                    'n_description' => $descr,
                    'n_date'        => $date,
                    'n_category'    => $category,
                    'n_status'      => $status,
                    'n_file'        => $upload_name,
                    'n_file_ext'    => $upload_ext,
                    'n_create_date' => date("Y-m-d H:i:s"),
                ];
                
                // STEP4 = insert values to database
                $this->db->insert('news', $data);

                // STEP5 = redirect pago to list method
                redirect(base_url('a_news_list'));

            }else{
                
                $data = [
                    'n_title'       => $title,
                    'n_description' => $descr,
                    'n_date'        => $date,
                    'n_category'    => $category,
                    'n_status'      => $status,
                    // 'n_file'        => $upload_name,
                    // 'n_file_ext'    => $upload_ext,
                    'n_create_date' => date("Y-m-d H:i:s"),
                ];
                
                // STEP4 = insert values to database
                $this->db->insert('news', $data);

                // STEP5 = redirect pago to list method
                redirect(base_url('a_news_list'));
            }

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

  
    public function delete_news($id){

        $this->db->where('n_id', $id)->delete('news');
        redirect(base_url('a_news_list'));

    }


    public function update_news($id){

        // bu function id-sine gore lazimi secilmiw xeberin ayrica getirilmesi ucundur.
        $data['single_news'] = $this->db->where('n_id',$id)->get('news')->row();
        if($data['single_news']){
            $this->load->view('admin/news/edit',$data);
        }else{
            redirect(base_url('a_news_list'));
        }
        
    }

    public function update_newsAct($id){
        // STEP1 = get all input names

        $title      = $_POST['title'];
        $descr      = $_POST['description'];
        $date       = $_POST['date'];
        $category   = $_POST['category'];
        $status     = $_POST['status'];


        if(!empty($title) && !empty($descr) && !empty($date) && !empty($category) && !empty($status)){


            // https://codeigniter.com/userguide3/libraries/file_uploading.html
            // --------- FILE UPLOAD (File yuklenmesi) ----------------------------------------
            $config['upload_path']          = './uploads/news/';
            $config['allowed_types']        = 'gif|jpg|png|mp3|jpeg';
            $config['remove_spaces']        = true;
            // $config['encrypt_name']         = true;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            

            if($this->upload->do_upload('image')){
                $upload_name = $this->upload->data('file_name');
                $upload_ext = $this->upload->data('file_ext');
                // ------------------------------------------------------
                $upload_name = $this->upload->data('file_name');
                $upload_ext = $this->upload->data('file_ext');
                // ------------------------------------------------------
                
                // STEP3 = push all input values in array
                $data = [
                    'n_title'       => $title,
                    'n_description' => $descr,
                    'n_date'        => $date,
                    'n_category'    => $category,
                    'n_status'      => $status,
                    'n_file'        => $upload_name,
                    'n_file_ext'    => $upload_ext,
                    // 'n_updater_id'  => ,
                    'n_update_date' => date("Y-m-d H:i:s"),
                ];
                
                // STEP4 = update values with id to database
                $this->db->where('n_id', $id)->update('news', $data);

                // STEP5 = redirect pago to list method
                redirect(base_url('a_news_list'));

            }else{

                $data = [
                    'n_title'       => $title,
                    'n_description' => $descr,
                    'n_date'        => $date,
                    'n_category'    => $category,
                    'n_status'      => $status,
                    // 'n_file'        => $upload_name,
                    // 'n_file_ext'    => $upload_ext,
                    'n_create_date' => date("Y-m-d H:i:s"),
                ];
                
                // STEP4 = value values with id to database
                $this->db->where('n_id', $id)->update('news', $data);

                // STEP5 = redirect pago to list method
                redirect(base_url('a_news_list'));

            }

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }


    }


    public function view_news($id){
        $data['single_news'] = $this->db->where('n_id',$id)->get('news')->row_array();
        $this->load->view('admin/news/detail',$data);

    }


}





