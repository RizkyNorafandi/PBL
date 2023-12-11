<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('sess');
        $this->load->library('form_validation');
        
    }
    

    public function index()
    {

        $this->form_validation->set_rules('nik', 'NIK', 'trim|required|numeric'
        ,[
            'required' => 'NIK Harus Diisi!',
            'numeric' => 'NIK Harus Berupa Angka!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required'
        ,[
            'required' => 'Password Harus Diisi!'
        ]);
        
        
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('template/login_header',$data);
            $this->load->view('ProjectPBL/login');
            $this->load->view('template/login_footer');
        }else {
            //jika validasi berlajalan
            $this->_login();
        }
    }

    public function _login()
    {
        $nik = $this->input->post('nik');
        $password = $this->input->post('password');

        $cekIbu = $this->sess->cekUser('data_ibu', 'nik', $nik);

        if($cekIbu == 0){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            NIK atau Password salah</div>');
            redirect('auth');
            
        }else{
            foreach($cekIbu as $ibu)  {
                if (password_verify($password,$ibu->password)){
                    $dataIbu = array(
                        'nik' => $ibu->nik,
                        'nama' => $ibu->nama_ibu,
                        'role' => 'ibu'
                    );
                    $this->session->set_userdata( $dataIbu );
                    redirect('dashboard');
                }
            }
        }

        $cekAnak = $this->sess->cekUser('data_anak','nik',$nik);

        if($cekAnak == 0){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    NIK atau Password salah</div>');
                    redirect('auth/login');
        }else{
            foreach($cekAnak as $anak) {
                if (password_verify($password,$anak->password)){
                    $dataAnak = array(
                        'nik' => $anak->nik,
                        'nama' => $anak->nama_anak,
                        'role' => 'anak'
                    );
                    
                    $this->session->set_userdata( $dataAnak );
                    redirect('auth');

                    
                }
            }
        }
    }

    public function register() 
    {
        $data['title'] = 'Registrasi';
        $this->load->view('template/login_header',$data);
        $this->load->view('ProjectPBL/register');
        $this->load->view('template/login_footer');
    }

    public function regis_ibu()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required',[
            'required' => 'Nama Harus Diisi!'
        ]);
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required|numeric|is_unique[data_ibu.nik]',[
            'required' => 'NIK Harus Diisi!',
            'numeric' => 'NIK Harus Berupa Angka!',
            'is_unique' => 'NIK Sudah Dipakai!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required',[
            'required' => 'Password Harus Diisi!'
        ]);
        
        

        if ($this->form_validation->run() == false) {

            # code...
            //register gagal dan kembali ke halaman register ibu
            $data['title'] = 'Registrasi Ibu';
            $this->load->view('template/login_header', $data);
            $this->load->view('ProjectPBL/register_ibu');
            $this->load->view('template/login_footer');
        }else{
            //jika register berhasil
            $this->sess->register_ibu();
            $this->session->set_flashdata('message', 
            '<div class="alert alert-success" role="alert">
                Akun Berhasil Ditambahkan! Silahkan Login
            </div>
            ');
            redirect('auth');
        }
        
    }

    public function regis_anak()
        
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required',[
            'required' => 'Nama Harus Diisi!'
        ]);
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required|numeric|is_unique[data_anak.nik]',[
            'required' => 'NIK Harus Diisi!',
            'numeric' => 'NIK Harus Berupa Angka!',
            'is_unique' => 'NIK Sudah Dipakai!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required',[
            'required' => 'Password Harus Diisi!'
        ]);
        $this->form_validation->set_rules('berat_badan', 'Berat badan', 'trim|required|numeric',[
            'required' => 'Berat Badan Harus Diisi!',
            'numeric' => 'Berat Badan Harus Berupa Angka!',
        ]);
        $this->form_validation->set_rules('tinggi_badan', 'Berat badan', 'trim|required|numeric',[
            'required' => 'Tinggi Badan Harus Diisi!',
            'numeric' => 'Tinggi Badan Harus Berupa Angka!',
        ]);
        
        if ($this->form_validation->run() == false) {
            # code...
            $data['title'] = 'Registrasi Anak';
            $this->load->view('template/login_header', $data);
            $this->load->view('ProjectPBL/register_anak');
            $this->load->view('template/login_footer');
        }else{
            $this->sess->register_anak();
            $this->session->set_flashdata('message', 
            '<div class="alert alert-success" role="alert">
                Akun Berhasil Ditambahkan! Silahkan Login
            </div>
            ');
            redirect('auth');

        }
    }

}

/* End of file Controllername.php */

?>