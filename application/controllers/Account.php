<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends App_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
	}
	public function logout()
	{
		// Delete the cookie by setting its expiration time to a past value
		delete_cookie('__plmkt_uat');
		redirect(SITE_URL . '/login/club');
	}

	function FechSuggetions()
	{

		
		if ($this->input->get('user_type') == 'C')
			echo json_encode($this->feed_model->clubsuggestion($this->userid,$this->input->get('user_type')));
		else if ($this->input->get('user_type') == 'P')
			echo json_encode($this->feed_model->playersuggestion($this->userid,$this->input->get('user_type')));
	}
	function follow()
	{
		// Notification if Success
		$response = $this->feed_model->follow();

		if ($response['status'] === 0) {

			$sender = $this->input->post('followed_by');
			$sender_type = $this->input->post('followedType');
			$receiver_type = $this->input->post('user_type');
			$receiver = $this->input->post('following_to');
			// get data of  the both sender and receiver
			$sender_id = $this->App_model->user_data($sender, $sender_type, 'user_id');

			if (strtoupper($sender_type) === 'C')
				$sender_type = 'Club';
			else if (strtoupper($sender_type) === 'P')
				$sender_type = 'Player';
			// if user is following to you then add notification
			$content = "<p class='fw-bold pl_id mb-0'>$sender_type - $sender_id
			</p> <p class='mb-0'><small>just followed you! Connect and share the magic.</small></p>
			";
			$notification = array(
				'user_id' => $this->input->post('following_to'), // kisko notification jane ko hona
				'user_type' => $this->input->post('user_type'), // jisko bhe rahe haui na uska type
				'content' => $content, // kya notification hai
				'timestamp' => time(), // kab ka notification hai
				'status' => 'unread', // tu to bhiyya unread hi rehga
				'type' => 'following', // isko type rakhe hai for which type
				'sender' => $this->input->post('followed_by'),
				'sender_type' => $this->input->post('followedType')
			);
			// $this->app_notifications($notification);
		}

		echo json_encode($response);
	}
}
