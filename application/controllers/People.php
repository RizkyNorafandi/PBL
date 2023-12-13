<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_people');
        
    }
    

    public function tb_ibu()
    {
        $title['title'] =  'Data Ibu';
        $data['tb_ibu'] = $this->M_people->getUserIbu();
        $this->load->view('template/dash_header.php',$title);
        $this->load->view('template/dash_sidebar.php');
        $this->load->view('template/dash_topbar.php');
        $this->load->view('dashboard/dash_ibu', $data);
        $this->load->view('template/dash_footer.php');   
    }

    public function tb_kader()
    {
        $title['title'] =  'Data kader';
        $data['tb_kader'] = $this->M_people->getUserKader();
        $this->load->view('template/dash_header.php',$title);
        $this->load->view('template/dash_sidebar.php');
        $this->load->view('template/dash_topbar.php');
        $this->load->view('dashboard/dash_kader', $data);
        $this->load->view('template/dash_footer.php');   
    }

    



}

/* End of file People.php */
  
?>