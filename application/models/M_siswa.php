<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {
    private $table = "siswa";
    function show($id = FALSE){
        if($id != FALSE){
            $this->db->where('id', $id);
        }
        return $this->db->get('siswa')->result();
    }
    function add($data){
        $this->db->insert($this->table, $data);
    }
    function del($id = FALSE){
        $this->db->where('id', $id);
        $this->db->delete($this->table); 
    }
    function edit($data, $id = FALSE){
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }
}