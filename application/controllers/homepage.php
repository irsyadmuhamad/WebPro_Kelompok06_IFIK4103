<!-- 	Author :
		Irsyad Muhamad Al Anshori 1301174648
-->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepage extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct() {
		parent::__construct();
		$this->load->model('users');
	}
	
	public function index() {
		$this->load->database();
		$data['title'] = "Website Tes Kesehatan Mental Anda";
		$data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$username = $data['users']['username'];
		$email = $data['users']['email'];
		
		if ($data['users'] == NULL) {
			$this->load->view('index_homepage', $data); 
		} else {
			$this->load->view('index_login', $data);
		}
	}
}
