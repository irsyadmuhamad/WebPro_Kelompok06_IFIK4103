<!--    Author :
        Irsyad Muhamad Al Anshori 1301174648
-->

<?php
    class Users extends CI_Model {
        
        public function checkEmail($email) {
            $this->db->where('email', $email);
            $check = $this->db->get('users')->row_array();
            if ($check == NULL) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        }

        public function addUser() {
            $this->load->database();
            
            $data = [
                "username" => $this->input->post('username', true),
                "password" => $this->input->post('password', true),
                "email" => $this->input->post('email', true)
            ];
            return $this->db->insert('users', $data);
        }
        
        public function checkUser($email, $password) {
            $this->db->where('email', $email);
            $this->db->where('password', $password);
            return $this->db->get('users')->row_array();
        }
        
        public function getUserByUsername($username) {
            $this->db->where('username', $username);
            return $this->db->get('users')->row_array();
        }
    }
?>