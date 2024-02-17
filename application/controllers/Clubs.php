<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clubs extends App_Controller
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
	public function find()
	{
		
		$data['view_path'] =  "pages/club_list";
		$data['page_title'] = "Player Panel - " . APP_NAME;

		$data['right_sidebar'] = 0; //for visible
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
				$data['Clubs'] = $this->club_model->fetchclub();
				$data['Club'] = $this->club_model->fetchclubs();
				$data['scripts'] = ['assets/js/follow.js'];
				// $data['scripts'] = ['assets/css/list.js'];

		$this->load->view('template', $data);
	}
	public function profile()
	{
		
			
		$data['view_path'] =  "pages/profile/search_profile";
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
				$id = $this->input->get('id');
                $data ['Clubs'] = $this->club_model->club($id);
                $data ['players'] = $this->club_model->player($id);
                $data['css_files'] = ['assets/css/profile.css'];

				$data['scripts'] = ['assets/js/follow.js'];

		$this->load->view('template', $data);
	}
	
}
