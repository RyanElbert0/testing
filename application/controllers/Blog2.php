<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog2 extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        // $data['judul'] = "Blog Ryan";
        // $data['isi'] = 'Ini isi blog ryan';
        // $this->load->view('blog_view',$data);
        $data['judul'] = "Blog Ryan";
        $data['isi'] = 'Ini isi blog ryan';
        $out = $this->load->view('blog_view',$data, true);
        echo $out;
    }

}