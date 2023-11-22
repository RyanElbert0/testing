<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Prodi_model extends CI_Model 
{
    public $table = 'prodi';
    public $id = 'prodi.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $querry = $this->db->get($this->table);
        return $querry->result_array();
    }
    public function getById($id)
    {
        $this->db->where('id', $id);
        $querry =  $this->db->get($this->table);
        return $querry->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}