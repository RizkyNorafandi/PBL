<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    private $table = 'tb_user';

    public function insert($payload){
        return $this->db->insert($this->table, $payload);
    }
}

/* End of file user_model.php */
 ?>