<?php
class Edit_model extends CI_Model
{
    function save_detail($data){
     
        return $this->db->insert('club_details', $data);
    }
    
    function fetchdetail(){
        $sql = "select * from club_details";
        return $this->db->query($sql)->row_array();
    }
    function fetchclub(){
        $sql = "select * from clubs";
        return $this->db->query($sql)->row_array();
    }
}