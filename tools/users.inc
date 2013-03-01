<?php

    class Users {
        private $user_id = -1;
        private $username;
        private $entrance_point;
        private $db;
        private $user_role;
        
        public function __construct($entrance_point, $database) 
        {
            $this->db = $database;
            $this->entrance_point = $entrance_point;
            if (isset($_SESSION[$this->entrance_point]['user_id'])) {
                $this->user_id = $_SESSION[$this->entrance_point]['user_id'];
                $this->username = $_SESSION[$this->entrance_point]['username'];
            }
        }
        
        public function id()
        {
            return $this->user_id;
        }
        
        public function isLogged() 
        {
            return $this->user_id != -1;            
        }       
        
        public function username()
        {
            return $this->username;
        }
        
        public function login($username, $password)
        {
            $user_data = $this->db->select_from_table(array('id', 'password', 'salt'), 'users',
                                                      array('username' => $username, 'role' => $this->entrance_point));
            if (empty($user_data)) {
                return false;
            }
            $user_data = $user_data[0];
            $hash = md5($password.$user_data['salt']);
            if ($hash == $user_data['password']) {
                $this->user_id = $user_data['id'];
                $this->username = $username;
                $_SESSION[$this->entrance_point]['user_id'] = $user_data['id'];
                $_SESSION[$this->entrance_point]['username'] = $username;
                return true;
            }
            return false;
        }
        
        public function logout()
        {
            unset($this->user_id);
            unset($_SESSION[$this->entrance_point]['user_id']);
            unset($_SESSION[$this->entrance_point]['username']);
        }
        
        public function addUser($username, $password)
        {
            $salt = rand();
            $hash = md5($password.$salt);
            
            $fields = array('username', 'password', 'salt', 'role');
            $values = array($username, $hash, $salt, $this->entrance_point);
            $this->db->insert_into_table('users', $fields, $values);            
        }
        
        public function saveUser($id, $username, $password, $role) 
        {
            $user_data = array();
            if (!empty($id)) {
                $user_data = $this->db->select_from_table(array('salt'), 'users',
                                                      array('id' => $id));
                $user_data = $user_data[0];
            } else {
                $user_data['salt'] = rand();
            }
            $user_data['username'] = $username;
            $user_data['password'] = md5($password.$user_data['salt']);
            $user_data['role']     = $role;
            $this->db->save_record_into_table($user_data, 'users', $id);
        }
        
    };

?>