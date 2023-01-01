<?php
    class ClientInfo{
        // ATTRIBUTES
        private $client_id;
        private $first_name;
        private $last_name;
        private $contact;
        private $email;
        private $password;

        // CONSTRUCTOR
        function __construct($arr)
        {
            $this->client_id = $arr[0];
            $this->first_name = $arr[1];
            $this->last_name = $arr[2];
            $this->contact = $arr[3];
            $this->email = $arr[4];
            $this->password = $arr[5];
        }

        // SETTERS
        function setAdminID($client_id){
            $this->client_id = $client_id;
        }

        function setFirstName($first_name){
            $this->first_name = $first_name;
        }

        function setLastName($last_name){
            $this->last_name = $last_name;
        }

        function setContact($contact){
            $this->contact = $contact;
        }

        function setEmail($email){
            $this->email = $email;
        }

        function setPassword($password){
            $this->password = $password;
        }

        // GETTERS
        function getClientID(){
            return $this->client_id;
        }

        function getFirstName(){
            return $this->first_name;
        }

        function getLastName(){
            return $this->last_name;
        }

        function getFullName(){
            return $this->getFirstName() . " " . $this->getLastName();
        }

        function getContact(){
            return $this->contact;
        }

        function getEmail(){
            return $this->email;
        }

        function getPassword(){
            return $this->password;
        }
    }
?>