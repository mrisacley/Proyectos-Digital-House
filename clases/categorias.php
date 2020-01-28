<?php

    class Categoria {
        private $id;
        private $nombre;

        public function verCategoria() {
            $link = Conexion::conectar();
            $stmt = $link->prepare("SELECT * FROM categoria");
            $stmt->execute();
            $todas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $todas;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    }