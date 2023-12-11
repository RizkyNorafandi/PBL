<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        // if($this->session->userdata('nik') == null){
        //     redirect('auth','refresh');
        // }
    }
    

    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('template/dash_header.php', $data);
        $this->load->view('template/dash_sidebar.php');
        $this->load->view('template/dash_topbar.php');
        $this->load->view('dashboard/dashboard');
        $this->load->view('template/dash_footer.php');
    }


}

/* End of file Controllername.php */
?>