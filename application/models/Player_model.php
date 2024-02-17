<?php
class Player_model extends CI_Model
{
    function fetchplayer(){
        $sql = "SELECT id, concat(first_name,' ', last_name) as name, country, city FROM players";
        return $this->db->query($sql)->result_array();
    }
    function fetchplayers(){
        $sql = "SELECT id, concat(first_name,' ', last_name) as name, country, city FROM players
        ORDER BY id DESC";
        return $this->db->query($sql)->result_array();
    }
 
    function player($id){
        $sql = "Select concat(p.first_name,' ', p.last_name) as name,p.player_id as p_id, ud.bio,ud.skills,ud.hobbies,ud.highest_education,ud.languages from players p, user_details ud where p.id = ud.user_id
        AND p.id = '$id'";
        return $this->db->query($sql)->row_array();
    }
}