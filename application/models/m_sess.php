<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_sess extends CI_Model {

    public $variable;

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function setSess()
    {
        
        $array = array(
            'username' => 'admin',
            'role' => 'administrator',
            'name' => 'rizky'
        );
        $this->session->set_userdata($array);

    }

    public function register()
    {
        $insert = array(
            'username'=> htmlspecialchars($this->input->post('username')),
            'password'=> htmlspecialchars(password_hash($this->input->post('password'),PASSWORD_DEFAULT)),
            'nama' => htmlspecialchars($this->input->post('nama')),
            // 'role'  => $this->input->post('role')             
        );
        $result = $this->db->insert('table_user', $insert);
        return$result;
    }

}

/* End of file Controllername.php */
?>