<?php
    class Agent
    {
        private $agentId = "";
        private $firstName = "";
        private $middleNameInitial = "";
        private $lastName = "";
        private $email = "";
        private $phoneNumber = "";
        private $position = "";
        private $agencyId = 0;
        private $username = "";
        private $password = "";
        
        //getters ans setters for the properties
        public function setAgentId($arg){
            $this->agentId = $arg;
        }
        
        public function getAgentId(){
        return $this->agentId;
        }

        public function setFirstName($arg){
            $this->firstName = $arg;
        }
        
        public function getFirstName(){
        return $this->firstName;
        }

        public function setMiddleNameInitial($arg){
            $this->middleNameInitial = $arg;
        }
        
        public function getMiddleNameInitial(){
        return $this->middleNameInitial;
        }

        public function setLastName($arg){
            $this->firstName = $arg;
        }
        
        public function getLastName(){
        return $this->lastName;
        }
        
        public function setEmail($arg){
            $this->email = $arg;
        }
        
        public function getEmail(){
        return $this->email;
        }

        public function setPhoneNumber($arg){
            $this->phoneNumber = $arg;
        }
        
        public function getPhoneNumber(){
        return $this->phoneNumber;
        }

        public function setPosition($arg){
            $this->position = $arg;
        }
        
        public function getPosition(){
        return $this->position;
        }

        public function setAgencyId($arg){
            $this->agencyId = $arg;
        }
        
        public function getAgencyId(){
        return $this->agencyId;
        }
        
        public function setUsername($arg){
            $this->username = $arg;
        }
        
        public function getUsername(){
        return $this->username;
        }

        public function setPassword($arg){
            $this->password = $arg;
        }
        
        public function getPassword(){
        return $this->password;
        }
      
        public function __construct($agent_details) {
            $this->firstName = $agent_details['firstname'];
			$this->middleNameInitial = $agent_details['middlename'];
			$this->lastName = $agent_details['lastname'];
			$this->email = $agent_details['email'];
			$this->phoneNumber = $agent_details['phonenumber'];
			$this->position = $agent_details['position'];
            $this->agencyId = $agent_details['agencyid'];
            $this->username = $agent_details['username'];
            $this->password = password_hash($agent_details['password'], PASSWORD_DEFAULT);
        }

        public function __toString() {
            $format = '"%s", "%s", "%s", "%s", "%s", "%s", "%d", "%s", "%s"';
            return sprintf($format, $this->firstName, $this->middleNameInitial, $this->lastName, $this->email, $this->phoneNumber, $this->position, $this->agencyId, $this->username, $this->password);
        }

    }
?>