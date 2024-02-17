<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Network extends App_controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		// if(!$this->session->userdata('type') == 'player')
		// {
		// 	return redirect('http://localhost/playersmkt/login/player');
		// }
	}

	function hub()
	{
		$data['page_title'] = 'Network Hub - MyPlayersmkt.com';
		$data['view_path'] = 'pages/mynetwork';
		$data['left_sidebar'] = 1; //for visible
		$data['right_sidebar'] = 1; //for visible
		$data['right_content'] = // For Right Sidebar
		array(
		'partials/right_content/news'
		);
		$data['left_content'] = // For Left Sidebar
		array(
			'partials/left_content/manage_mynetwork'
			);
		// $data['css_files'] = ['assets/css/home-sample.css'];
		$data['scripts'] = ['assets/js/network_hub.js'];
		$this->load->view('template', $data);
	}

	function invitations()
	{
		echo json_encode($this->network_model->invitations($this->userid,$this->input->get('user_type')));
	}

	function requests()
	{
		echo json_encode($this->network_model->requests());
	}
	
}
