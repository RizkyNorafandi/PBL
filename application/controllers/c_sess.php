<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class c_sess extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('session');
        $this->load->model('m_sess');
    }
    

    public function index()
    {
        $this->load->view('v_sess');
        
    }

    public function set()
    {
        $this->m_sess->setSess();
        redirect('c_sess');
    }

public function in() 
{
    echo 'hello world';
}

public function buatKapital($nama)
{
    return ucwords($nama);
}
    


}

/* End of file Controllername.php */
?>