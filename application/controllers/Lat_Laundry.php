<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lat_Laundry extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('laundry');
    }
    public function index()
    {
        $this->laundry->laundry('6.5', 'Setrika saja', 'tidak ada', 'ada');
        echo "<br /><br />";
        $this->laundry->laundry('8', 'Setrika saja', 'ada', 'ada');
        echo "<br /><br />";
        $this->laundry->laundry('3.5', 'Setrika saja', 'tidak ada', 'tidak ada');
       
    }

}