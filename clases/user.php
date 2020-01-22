<?php

    class User {
        private $email;
        private $pass;
        private $username;
        private $nick;
        private $pais;
        private $edad;
        private $puntaje;

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of pass
         */ 
        public function getPass()
        {
                return $this->pass;
        }

        /**
         * Set the value of pass
         *
         * @return  self
         */ 
        public function setPass($pass)
        {
                $this->pass = $pass;

                return $this;
        }

        /**
         * Get the value of username
         */ 
        public function getUsername()
        {
                return $this->username;
        }

        /**
         * Set the value of username
         *
         * @return  self
         */ 
        public function setUsername($username)
        {
                $this->username = $username;

                return $this;
        }

        /**
         * Get the value of nick
         */ 
        public function getNick()
        {
                return $this->nick;
        }

        /**
         * Set the value of nick
         *
         * @return  self
         */ 
        public function setNick($nick)
        {
                $this->nick = $nick;

                return $this;
        }

        /**
         * Get the value of pais
         */ 
        public function getPais()
        {
                return $this->pais;
        }

        /**
         * Set the value of pais
         *
         * @return  self
         */ 
        public function setPais($pais)
        {
                $this->pais = $pais;

                return $this;
        }

        /**
         * Get the value of edad
         */ 
        public function getEdad()
        {
                return $this->edad;
        }

        /**
         * Set the value of edad
         *
         * @return  self
         */ 
        public function setEdad($edad)
        {
                $this->edad = $edad;

                return $this;
        }

        /**
         * Get the value of puntaje
         */ 
        public function getPuntaje()
        {
                return $this->puntaje;
        }

        /**
         * Set the value of puntaje
         *
         * @return  self
         */ 
        public function setPuntaje($puntaje)
        {
                $this->puntaje = $puntaje;

                return $this;
        }
    }