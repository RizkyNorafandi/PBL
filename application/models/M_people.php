<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_people extends CI_Model {

    public function getUserIbu()
    {
        $result = $this->db->get('data_ibu');
        return $result;
    }

    public function detailIbu($id)
    {
        $this->db->where('id', $id);
        
    }

}

/* End of file M_people.php */

?>
