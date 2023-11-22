<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth2 extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserGame_model', 'userrole');
    }
    public function index()
    {         
        if($this->session->userdata('email')){
            redirect('Mahasiswa');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('usia', 'Usia Pengguna', 'required',[
            'required' => 'Usia pengguna wajib diisi'
        ]);
        $this->form_validation->set_rules('game_id', 'ID Pengguna', 'required',[
            'required' => 'ID pengguna wajib diisi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Password Tidak Sama',
            'min_length' => 'Password terlalu pendek',
            'required' => 'Password harus di isi'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
        
        if($this->form_validation->run()==false){
            $data['judul'] = 'Registrasi';
            $this->load->view("layout/auth_header",$data);
            $this->load->view("auth/latFormValid");
            $this->load->view("layout/auth_footer");       
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' =>  htmlspecialchars($this->input->post('email', true)),
                'usia' =>  ($this->input->post('usia', true)),
                'jenis_kelamin' =>  ($this->input->post('jenis_kelamin', true)),
                'game_id' =>  ($this->input->post('email', true)),
                'password' =>  password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            ];
            $this->userrole->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat Akunmu telah berhasil terdaftar, silahkan Sign in</div> ');
            redirect('Auth2'); 
        }   
    }  
}