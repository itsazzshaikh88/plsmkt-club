<?php
class App_model extends CI_model
{
	function addNotification($notification = [])
	{
		if ($notification != [])
			$this->db->insert('notifications', $notification);
		return true;
	}

	function user_data($user_id, $user_type, $content = 'data')
	{
		if (strtoupper($user_type) === 'C')
			$user_data = $this->db->where("id", $user_id)->get("clubs")->row_array();
		else if (strtoupper($user_type) === 'P')
			$user_data = $this->db->where("id", $user_id)->get("players")->row_array();

		if ($content === 'data')
			return $user_data;
		elseif ($content === 'name') {
			$name_of_the_user = '';
			if (strtoupper($user_type) === 'C')
				$name_of_the_user = $user_data['club_name'];
			else if (strtoupper($user_type) === 'P')
				$name_of_the_user = $user_data['first_name'] . ' ' . $user_data['last_name'];
			return $name_of_the_user;
		} elseif ($content === 'user_id') {
			$user_id_of_the_user = '';
			if (strtoupper($user_type) === 'C')
				$user_id_of_the_user = $user_data['club_id'];
			else if (strtoupper($user_type) === 'P')
				$user_id_of_the_user = $user_data['player_id'];
			return $user_id_of_the_user;
		}
	}
}
