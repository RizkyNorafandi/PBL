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
    }
    public function login()
    {
        $this->load->helper('url');

        $this->load->view('template/login_header');
        $this->load->view('ProjectPBL/login');
        $this->load->view('template/login_footer');

    }
    public function cek_login()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = md5($this->input->post('password'));
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

    public  function regis()
        {
            $this->load->view('V_register');
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