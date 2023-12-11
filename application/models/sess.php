<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class sess extends CI_Model {

    public function register_ibu()
    {
        $insert = [
            'nama_ibu' => htmlspecialchars($this->input->post('nama'),true),
            'nik' => htmlspecialchars($this->input->post('nik'),true),
            'password' => password_hash($this->input->post('password')
            ,PASSWORD_DEFAULT),
            'date_created' => time()  
        ];

        $this->db->insert('data_ibu', $insert);
    }

    public function register_anak()
    {
        $insert = [
            'nama_anak' => htmlspecialchars($this->input->post('nama'),true),
            'nik' => htmlspecialchars($this->input->post('nik'),true),
            'password' => password_hash($this->input->post('password')
            ,PASSWORD_DEFAULT),
            'berat_badan' => htmlspecialchars($this->input->post('berat_badan'),true),
            'tinggi_badan' => htmlspecialchars($this->input->post('tinggi_badan'),true),
            'date_created' => time()  
        ];
        
        $this->db->insert('data_anak', $insert);
    }

    public function cekUser($tabel,$field,$param)
    {
        $this->db->from($tabel);
        $this->db->where($field, $param);
        $query = $this->db->get();

        if ($query->num_rows() == 1){
            return $query->result();
        }else{
            return false;
        }
        
    }

}

/* End of file sess.php */

?>