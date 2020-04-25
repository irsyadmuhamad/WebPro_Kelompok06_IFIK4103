<!--    Author :
        Irsyad Muhamad Al Anshori 1301174648
-->

<?php
    class login extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('users');
            $this->load->library('form_validation');
	    }

        public function index() {
            $this->load->library('form_validation');
		    $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $checkLogin = $this->users->checkUser($email, $password);

            if ($this->form_validation->run() == TRUE && !empty($checkLogin)) {
                $dataUser = $this->db->get('users');
                $this->session->set_userdata($checkLogin);
                redirect('/homepage');
            } else {
                $this->load->view('login');
                $this->session->set_flashdata('flash', 'Email atau Password yang Anda masukkan salah!');
            }
        }

        public function logout() {
            $this->session->sess_destroy();
            $this->session->unset_userdata($checkLogin);
            redirect('homepage');
            redirect('homepage');
        }
    }
?>