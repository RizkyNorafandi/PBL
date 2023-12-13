<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_people extends CI_Model {

    public function getUserIbu()
    {
        $result = $this->db->get('tb_ibu')->result_array();
        return $result;
    }

    public function getUserKader()
    {
        $result = $this->db->get('tb_kader')->result_array();
        return $result;
    }

    public function detailIbu($id)
    {
        $this->db->where('id', $id);
    }

}

/* End of file M_people.php */

?>
