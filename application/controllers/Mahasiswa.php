<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->model('Prodi_model');
        $this->load->model('User_model');
    }
    public function index()
    {
        $data['judul'] =  "Halaman Mahasiswa";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->Mahasiswa_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_mahasiswa", $data);
        $this->load->view("layout/footer", $data);
    }

    function tambah()
    {
        $data['judul'] =  "Halaman Tambah Mahasiswa";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->Prodi_model->get();

        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required',[
            'required' => 'Nama mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('nim', 'NIM', 'required',[
            'required' => 'NIM mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required',[
            'required' => 'Email mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('prodi', 'Prodi', 'required',[
            'required' => 'Prodi mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required',[
            'required' => 'Alamat mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required',[
            'required' => 'Asal Sekolah mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('telp', 'No HP Mahasiswa', 'required',[
            'required' => 'No HP mahasiswa wajib diisi',
            'integer' => 'No HP harus angka'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required',[
            'required' => 'Jenis Kelamin mahasiswa wajib diisi'
        ]);

        if($this->form_validation->run()==false){
            $this->load->view("layout/header", $data);
            $this->load->view("mahasiswa/vw_tambah_mahasiswa", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'prodi' => $this->input->post('prodi'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),
            ];

            $this->Mahasiswa_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data mahasiswa berhasil ditambahkan</div> ');
            redirect('Mahasiswa'); 
        }
      
    }

        public function detail($id)
    {
        $data['judul'] =  "Halaman Detail Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_detail_mahasiswa", $data);
        $this->load->view("layout/footer");
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Mahasiswa Berhasil Dihapus!</div>');
        redirect('Mahasiswa');
    }

    public function edit($id)
    {
        $data['judul'] =  "Halaman Ubah Mahasiswa";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        $data['prodi'] = $this->Prodi_model->get();

        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required',[
            'required' => 'Nama mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('nim', 'NIM', 'required',[
            'required' => 'NIM mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required',[
            'required' => 'Email mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('prodi', 'Prodi', 'required',[
            'required' => 'Prodi mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required',[
            'required' => 'Alamat mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required',[
            'required' => 'Asal Sekolah mahasiswa wajib diisi'
        ]);
        $this->form_validation->set_rules('telp', 'No HP Mahasiswa', 'required',[
            'required' => 'No HP mahasiswa wajib diisi',
            'integer' => 'No HP harus angka'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required',[
            'required' => 'Jenis Kelamin mahasiswa wajib diisi'
        ]);

        if($this->form_validation->run()==false){
            $this->load->view("layout/header", $data);
            $this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'prodi' => $this->input->post('prodi'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),
            ];
            $id= $this->input->post('id');
            $this->Mahasiswa_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data mahasiswa berhasil diubah!</div> ');
            redirect('Mahasiswa'); 
        }
    }


}