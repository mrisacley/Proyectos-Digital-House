<?php 

    class Pregunta {
        private $puntacion;
        

        /**
         * Get the value of puntacion
         */ 
        public function getPuntacion()
        {
                return $this->puntacion;
        }

        /**
         * Set the value of puntacion
         *
         * @return  self
         */ 
        public function setPuntacion($puntacion)
        {
                $this->puntacion = $puntacion;

                return $this;
        }
    }