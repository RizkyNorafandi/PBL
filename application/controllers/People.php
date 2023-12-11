<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_people');
        
    }
    

    public function index()
    {
        $title['title'] =  'Data Ibu';
        $data['tb_ibu'] = $this->M_people->getUserIbu();
        $this->load->view('template/dash_header.php',$title);
        $this->load->view('template/dash_sidebar.php');
        $this->load->view('template/dash_topbar.php');
        $this->load->view('dashboard/dash_ibu', $data);
        $this->load->view('template/dash_footer.php');
        
    }

    



}

/* End of file People.php */
  
?>