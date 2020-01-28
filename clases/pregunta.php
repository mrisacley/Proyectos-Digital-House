<?php
include_once("conexion.php");
include_once("categorias.php");
    class Pregunta {
        private $idPregunta;
        private $puntacion;
        private $pregunta=[];
        private $categoria;


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

        public function getCategoria()
        {
                return $this->categoria;
        }
        public function agregarPregunta()
        {
            $puntaje = $_POST["puntuacion"];
            $pregunta = $_POST["pregunta"];
            $correcta = $_POST["opcion_correcta"];
            $op2 = $_POST["opcion2"];
            $op3 = $_POST["opcion3"];
            $op4 = $_POST["opcion4"];
          //$categoria = getIdCategoria($_GET["categoria"]);

            $link = conexion::conectar();
            $sql = "INSERT INTO quiz
                    VALUES
                          (
                            default, :score, :quiz, :win, :op2, :op3, :op4, default
                          );";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':score',$puntaje,PDO::PARAM_INT);
            $stmt->bindParam(":quiz",$pregunta,PDO::PARAM_STR);
            $stmt->bindParam(":win",$correcta,PDO::PARAM_STR);
            $stmt->bindParam(":op2",$op2,PDO::PARAM_STR);
            $stmt->bindParam(":op3",$op3,PDO::PARAM_STR);
            $stmt->bindParam(":op4",$op4,PDO::PARAM_STR);

            $stmt->execute();

        }

        public function getIdPregunta()
        {
            return $this->idPregunta;
        }
        public function setIdPregunta($newId)
        {
            $this->idPregunta = $newId;
        }
    }
