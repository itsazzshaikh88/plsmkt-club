<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends App_Controller
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
	public function index()
	{
		
		$data['view_path'] =  "pages/profile";
		$data['page_title'] = "Club Panel - " . APP_NAME;

		$data['right_sidebar'] = 1; //for visible
		$data['left_sidebar'] = 0; //for visible
		$data['right_content'] = // For Right Sidebar
			array(
				'partials/right_content/news',
				'partials/right_content/suggetions'
			);
			$data['left_content'] = // For Left Sidebar
			array(
				'partials/left_content/profile_box',
				'partials/left_content/quick_links'
				);
                $data ['Clubs'] = $this->edit_model->fetchclub();
                $data['css_files'] = ['assets/css/profile.css'];

				$data['scripts'] = ['assets/js/follow.js'];

		$this->load->view('template', $data);
	}
	public function club_details()
	{
		
		$data['view_path'] =  "pages/club_details";
		$data['page_title'] = "Club Panel - " . APP_NAME;

		$data['right_sidebar'] = 1; //for visible
		$data['left_sidebar'] = 1; //for visible
		$data['right_content'] = // For Right Sidebar
			array(
				'partials/right_content/news',
				'partials/right_content/suggetions'
			);
			$data['left_content'] = // For Left Sidebar
			array(
				'partials/left_content/profile_box',
				'partials/left_content/quick_links'
				);
                $data ['Clubs'] = $this->edit_model->fetchclub();
                $data['css_files'] = ['assets/css/profile.css'];

				$data['scripts'] = ['assets/js/follow.js'];

		$this->load->view('template', $data);
	}

	public function edit()
	{
		
		$data['view_path'] =  "pages/profile/profile";
		$data['page_title'] = "Club Panel - " . APP_NAME;

		$data['right_sidebar'] = 1; //for visible
		$data['left_sidebar'] = 1; //for visible
		$data['right_content'] = // For Right Sidebar
			array(
				'partials/right_content/news',
				'partials/right_content/suggetions'
			);
			$data['left_content'] = // For Left Sidebar
			array(
				'partials/left_content/profile_box',
				'partials/left_content/quick_links'
				);
                $data ['Clubs'] = $this->edit_model->fetchclub();
                $data ['clubs'] = $this->edit_model->fetchdetail();
                $data['css_files'] = ['assets/css/profile.css'];

				$data['scripts'] = ['assets/js/follow.js'];
                // $data['scripts'] = ['assets/js/edit_club.js'];

		$this->load->view('template', $data);
	}

	public function add_details()
	{
		
		$data['view_path'] =  "pages/add_details";
		$data['page_title'] = "Club Panel - " . APP_NAME;

		$data['right_sidebar'] = 1; //for visible
		$data['left_sidebar'] = 1; //for visible
		$data['right_content'] = // For Right Sidebar
			array(
				'partials/right_content/news',
				'partials/right_content/suggetions'
			);
			$data['left_content'] = // For Left Sidebar
			array(
				'partials/left_content/profile_box',
				'partials/left_content/quick_links'
				);
                $data ['Clubs'] = $this->edit_model->fetchdetail();
                $data['css_files'] = ['assets/css/profile.css'];

				// $data['scripts'] = ['assets/js/follow.js'];
                $data['scripts'] = ['assets/js/edit_club.js'];

		$this->load->view('template', $data);
	}
	public function club_documents()
	{
		
		$data['view_path'] =  "pages/club_documents";
		$data['page_title'] = "Club Panel - " . APP_NAME;

		$data['right_sidebar'] = 1; //for visible
		$data['left_sidebar'] = 1; //for visible
		$data['right_content'] = // For Right Sidebar
			array(
				'partials/right_content/news',
				'partials/right_content/suggetions'
			);
			$data['left_content'] = // For Left Sidebar
			array(
				'partials/left_content/profile_box',
				'partials/left_content/quick_links'
				);
                $data['css_files'] = ['assets/css/profile.css'];

				$data['scripts'] = ['assets/js/follow.js'];
                // $data['scripts'] = ['assets/js/edit_club.js'];

		$this->load->view('template', $data);
	}
	public function upload()
	{
		
		$data['view_path'] =  "pages/club_profile";
		$data['page_title'] = "Club Panel - " . APP_NAME;

		$data['right_sidebar'] = 1; //for visible
		$data['left_sidebar'] = 1; //for visible
		$data['right_content'] = // For Right Sidebar
			array(
				'partials/right_content/news',
				'partials/right_content/suggetions'
			);
			$data['left_content'] = // For Left Sidebar
			array(
				'partials/left_content/profile_box',
				'partials/left_content/quick_links'
				);
                $data['css_files'] = ['assets/css/profile.css'];

				$data['scripts'] = ['assets/js/follow.js'];
				

		$this->load->view('template', $data);
	}
    function save_detail()
	{
		// $id = $this->session->userdata('id');
		// $post= $this->input->post();
        $data = array(
            'club_id'=> $this->input->post('club_id'),
            'owner_name'=> $this->input->post('owner_name'),
            'founded_at'=> $this->input->post('founded_at'),
            'president'=> $this->input->post('president'),
            'manager'=> $this->input->post('manager'),
            'total_titles'=> $this->input->post('total_titles'),
            'gmap_location'=> $this->input->post('gmap_location'),
            'website_link'=> $this->input->post('website_link'),
        );
		echo json_encode($this->edit_model->save_detail($data));
	}
}
