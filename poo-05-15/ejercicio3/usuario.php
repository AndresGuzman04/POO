<?php

    class Usuario {

        private $userName;
        private $password;
        private $email;

        public function __construct(
                $userName = null,
                $password, 
                $email = null){

            $this->username = $userName;
            $this->password = $password;
            $this->email = $email;
        }

        public function getUserName(){
            return $this->username;

        }

        public function setUserName($userName){
            $this->username = $userName;
        }

        public function getPassword(){
            return $this->password;

        }

        public function setPassword($password){
            $this->password = $password;

        }

        public function getEmail(){
            return $this->email;

        }

        public function setEmail($email){
            $this->email = $email;
        }

    }

?>