<?php
class Club_model extends CI_Model
{
    function fetchclub(){
        $sql = "SELECT id, club_name, country, city FROM clubs";
        return $this->db->query($sql)->result_array();
    }
    function fetchclubs(){
        $sql = "SELECT id, club_name, country, city FROM clubs
        ORDER BY id DESC";
        return $this->db->query($sql)->result_array();
    }
    function club($id){
        $sql = "SELECT 
        c.club_name,
        c.club_id AS clubs_id,
        cd.owner_name,
        cd.founded_at,
        cd.president,
        cd.manager,
        cd.total_titles,
        cd.gmap_location,
        cd.website_link,
        cd.bio 
    FROM 
        clubs c, 
        club_details cd 
    WHERE 
        c.id = cd.club_id 
        AND c.id = '$id'
    ";
        return $this->db->query($sql)->row_array();
    }
    function player($id){
        $sql = "Select concat(p.first_name,' ', p.last_name) as name,p.player_id as p_id, ud.bio,ud.skills,ud.hobbies,ud.highest_education,ud.languages from players p, user_details ud where p.id = ud.user_id
        AND p.id = '$id'";
        return $this->db->query($sql)->row_array();
    }
}