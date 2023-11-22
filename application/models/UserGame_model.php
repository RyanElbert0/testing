<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserGame_model extends CI_Model
{
    public $table = 'user_game';
    public $id = 'user_game.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        // $this->db->from();
        $querry = $this->db->get($this->table);
        return $querry->result_array();
    }
    public function getBy()
    {
        $this->db->from($this->table);
        $this->db->where('email',$this->session->userdata('email'));
        $querry =  $this->db->get();
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