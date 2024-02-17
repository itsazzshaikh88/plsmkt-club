<?php

class Network_model extends CI_Model {

	function invitations($logged_in_userid,$usertype)
	{

	$type_get = $this->input->get('type');
	if($type_get == 'inv')
	{
		$sql = "SELECT 
        f.id,
        CASE 
            WHEN f.followed_by_user_type = 'C' THEN c.club_id 
            WHEN f.followed_by_user_type = 'P' THEN p.player_id 
            ELSE '' 
        END AS user_id, 
        CASE 
            WHEN f.followed_by_user_type = 'P' AND p.sport_id = s.sr_no THEN s.sport_name 
            ELSE '' 
        END AS sport, 
        CASE 
            WHEN f.followed_by_user_type = 'C' THEN 'Club' 
            WHEN f.followed_by_user_type = 'P' THEN 'Player' 
            ELSE '' 
        END AS Requested_by 
    FROM 
        followers f,
        players p,
        clubs c,
        sports s
    WHERE 
        f.following_to = '$logged_in_userid' 
        AND f.following_user_type = '$usertype' 
        AND f.status = 'Requested' 
        AND f.followed_by = p.id 
        AND f.followed_by = c.id 
    GROUP BY 
        f.id 
    ORDER BY 
        f.id DESC;
    ";


	}else if($type_get == 'cnv')
	{
		$sql = "select f.id,CASE 
		WHEN f.requested_by_user_type = 'C' THEN c.club_id
		WHEN f.requested_by_user_type = 'P' THEN p.player_id
		ELSE ''
	END AS user_id,

	CASE 
		WHEN f.requested_by_user_type = 'C' THEN c.profile_picture
		WHEN f.requested_by_user_type = 'P' THEN p.profile_photo
		ELSE ''
	END AS pp,
	
	  CASE 
		WHEN f.requested_by_user_type = 'C' AND c.club_sports = s.sr_no   THEN s.sport_name
		WHEN f.requested_by_user_type = 'P' AND p.sport_id = s.sr_no   THEN s.sport_name
		ELSE ''
	END AS sport,
	
	 CASE 
		WHEN f.requested_by_user_type = 'C'   THEN 'Club'
		WHEN f.requested_by_user_type = 'P'   THEN 'Player'
		ELSE ''
	END AS Requested_by
	
	from inbox_requests f ,players p,clubs c,sports s
	where f.request_to = '$logged_in_userid' and
	f.requested_user_type = '$usertype' and
	f. status = 'Requested' and
	f.requested_by = p.id and 
	f.requested_by=c.id  group by f.id desc";

	}

	return $this->db->query($sql)->result_array();


	}


	function requests()
	{
		$type = $this->input->post('type');
		$id = $this->input->post('id');
		$content_type = $this->input->post('content_type');

		if($content_type == 'inv')
		{
			if($type == 'I')
		{
			$sql = "DELETE FROM followers where id = $id";
			$data['status'] = $this->db->query($sql) == true ? 2 : 3;
		}else if($type == 'A')
		{
			$sql = "UPDATE followers SET status = 'Unfollow' where id = $id";
			$data['status'] = $this->db->query($sql) == true ? 1 : 0;
		}

		}else if($content_type == 'cnv')
		{

			if($type == 'I')
		{
			$sql = "DELETE FROM inbox_requests where id = $id";
			$data['status'] = $this->db->query($sql) == true ? 2 : 3;
		}else if($type == 'A')
		{
			$sql = "UPDATE inbox_requests SET status = 'Started' where id = $id";
			$data['status'] = $this->db->query($sql) == true ? 1 : 0;
		}

		}
		

		return $data;
	}

}
