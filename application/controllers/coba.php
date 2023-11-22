<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class coba extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
       
    }
    public function index()
    {
        $data['judul'] =  "Coba Detail";
        $data['mahasiswa'] = [
            'nama' => 'Budi',
        'nim' => '2233402223',
        'email' => 'budi@gmail.com',
        'prodi' => 'Teknik Informatika',
        'alamat' => 'Jl. jalan',
        'telp' => '082245452323',
        'jenis_kelamin' => 'Laki-laki',
        'asal_sekolah' => 'SMKN1 Pekanbaru',
        ];

        $this->load->view("layout/header");
        $this->load->view("mahasiswa/coba_detail", $data);
        $this->load->view("layout/footer");
    }

    
}