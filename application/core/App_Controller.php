<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App_Controller extends CI_Controller
{
	public $user;
	public $usertype;
	public $userid;
	public $app_language;

	public function __construct()
	{
		parent::__construct();
		$this->isAuthenticated();
	}

	function isAuthenticated()
	{
		$auth_cookie = $this->input->cookie('__plmkt_uat', TRUE);
		$this->app_language = $this->input->cookie('_applang', TRUE);
		// If cookie is not present redirect to login page
		if ($auth_cookie == '')
			return redirect(SITE_URL . "/login/club?force-logout=true");
		// If Cookie is present then check for authentication token and authenticate user
		$this->user = $this->db
			->query("SELECT c.id, c.club_id, c.managed_by, c.club_name, c.email, c.country, c.city, c.is_verified, c.is_subscribed, c.verified_on, c.subscribed_on, c.verification_source, c.registered_at, c.refered_by, c.refered_by_type, upi.profile_image, upi.cover_image, upi.listing_image
			FROM clubs c
			LEFT JOIN user_profile_images upi ON c.id = upi.user_id AND upi.user_type = 'club'
			WHERE c.auth_token = '$auth_cookie';
			")
			->row_array();

		if (empty($this->user))
			return redirect(SITE_URL . "/login/club?force-logout=true");
		// set user details
		$this->userid = $this->user['id'];
		$this->usertype = "club";
	}
}
