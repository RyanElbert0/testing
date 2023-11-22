<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pendaftaran extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

    }
    public function index()
    {
        $this->load->view("layout/Header2");
        $this->load->view("pendaftaran/semua");
        $this->load->view("layout/Footer2");
    }

    public function reguler()
    {
        $this->load->view("layout/Header2");
        $this->load->view("pendaftaran/reguler");
        $this->load->view("layout/Footer2");
    }

    public function magister()
    {
        $this->load->view("layout/Header2");
        $this->load->view("pendaftaran/magister");
        $this->load->view("layout/Footer2");
    }

    public function ahli()
    {
        $this->load->view("layout/Header2");
        $this->load->view("pendaftaran/ahli");
        $this->load->view("layout/Footer2");
    }

    public function login()
    {
        if ($_POST['email'] = 'ryan@gmail.com' && $_POST['password'] ='123'){
            redirect('Pendaftaran/tambah');
        }
    }

    public function tambah()
    {
        if($this->form_validation->run()==false){
            $this->load->view("layout/Header2");
            $this->load->view("pendaftaran/tambah");
            $this->load->view("layout/Footer2");
        }
        else {
            if (isset($_POST['tambah'])){
                $nama=$_POST['nama'];
                $nisn=$_POST['nisn'];
                $nik=$_POST['nik'];
                $email=$_POST['email'];
                $no_hp=$_POST['no_hp'];
                $no_wa=$_POST['no_wa'];
                $tempat_lahir=$_POST['tempat_lahir'];
                $tanggal_lahir=$_POST['tanggal_lahir'];
                $jenis_kelamin=$_POST['jenis_kelamin'];
                $kabupaten_tinggal=$_POST['kabupaten_tinggal'];
                $kecamatan_tinggal=$_POST['kecamatan_tinggal'];
                $kabupaten_sekolah=$_POST['kabupaten_sekolah'];
                $sekolah_asal=$_POST['sekolah_asal'];
                $jurusan=$_POST['jurusan'];
                $tahun_lulus=$_POST['tahun_lulus'];
                };
        
                $data['user'] = [
                    'nama' => $nama,
                    'nisn' => $nisn,
                    'nik' => $nik,
                    'email' =>$email,
                    'no_hp' => $no_hp,
                    'no_wa' => $no_wa,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'jenis_kelamin' => $jenis_kelamin,
                    'kabupaten_tinggal' => $kabupaten_tinggal,
                    'kecamatan_tinggal' => $kecamatan_tinggal,
                    'kabupaten_sekolah' => $kabupaten_sekolah,
                    'sekolah_asal' => $sekolah_asal,
                    'jurusan' => $jurusan,
                    'tahun_lulus' => $tahun_lulus,
                ];
        
                $this->load->view("layout/Header2");
                $this->load->view("pendaftaran/profile", $data);
                $this->load->view("layout/Footer2");
        } 
            
    }
}