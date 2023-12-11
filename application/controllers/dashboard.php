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
        $this->load->view('template/dash_header.php');
        $this->load->view('dashboard/dashboard');
        $this->load->view('template/dash_footer.php');
    }


}

/* End of file Controllername.php */
?>