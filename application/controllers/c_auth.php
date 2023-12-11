<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class c_auth extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_sess');
        
    }
    
    public function index()
    {
        redirect('c_auth/login');
        {
       
    //         $this->form_validation->set_rules('username','Username','trim|required');
    //         $this->form_validation->set_rules('password','Password','trim|required');
            
    //         if($this->form_validation->run()==FALSE){
    //             $data ['title'] = 'Jendela wisata login';
    //             $this->load->view('templates/header',$data);
    //             $this->load->view('auth/v_login');
    //             $this->load->view('templates/footer');  
    //         }else{
    //             $this->_login();
    //         }
    //     }
        }
    }
    public function login()
    {
        $data['title'] = 'Login';
        $this->load->view('template/login_header',$data);
        $this->load->view('ProjectPBL/login');
        $this->load->view('template/login_footer');
        

    }
    public function cek_login()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars(md5($this->input->post('password')));
        $where = "username = '$username' AND password = '$password'";
        $this->db->where($where);
        $data = $this->db->get('table_user');
        if ($data->num_rows()==1) {
            $data = $data->result_array();
            $sess = array(
                'username' => $data[0]['username'],
                'nama' => $data[0]['nama'],
                'role' => $data[0]['role'],
            );
            
            $this->session->set_userdata($sess);
            redirect('dashboard');

        } else {
            # code...
            echo 'login gagal';
        } 
    }
        // $username = htmlspecialchars($this->input->post('username'));
        // $password = htmlspecialchars($this->input->post('password'));

        // $user = $this->db->get_where('table_user',['username'=>$username])->row_array();
        // //jika ada username
        // if($user){
        //     //cek password
        //     if(password_verify($password, $user['password'])){
        //         $data=[
        //             'username' => $user['username'],
        //         ];
        //         $this->session->set_userdata($data);
        //         redirect('dashboard/index');
        //     }else{
        //         $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
        //         Password Salah</div>');
        //         redirect('c_auth/login');
        //     }
            
        // }else{
        //     //jika username tidak ada
        //     $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
        //     NIK tidak ada</div>');
        //     redirect('c_auth/login');
    //     }
    // }

    public  function regis()
    {
        $data['title'] = 'Registrasi';
        $this->load->view('template/login_header',$data);
        $this->load->view('ProjectPBL/register');
        $this->load->view('template/login_footer');
    }

    public  function regis_anak()
        {
            $data['title'] = 'Registrasi Anak';
            $this->load->view('template/login_header', $data);
            $this->load->view('ProjectPBL/register_anak');
            $this->load->view('template/login_footer');
        }

    public  function regis_ibu()
        {
            $data['title'] = 'Registrasi Ibu';
            $this->load->view('template/login_header', $data);
            $this->load->view('ProjectPBL/register_ibu');
            $this->load->view('template/login_footer');
        }

        public function register()
        {
            $this->m_sess->register();
            redirect('c_auth');
        }

        public function desSess() 
        {
            session_destroy();
            redirect('c_auth');
        }

}

/* End of file Controllername.php */
?>