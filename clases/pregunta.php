<?php

    class Pregunta {
        private $idPregunta;
        private $puntacion;
        private $pregunta;
        private $correcta;
        private $opcion2;
        private $opcion3;
        private $opcion4;
        private $categoria;


        public function mostrarPreguntas(){
            $link = Conexion::conectar();
            $IDcat = $this->IDcat();
            $stmt = $link->prepare("SELECT * FROM quiz WHERE categoria_id = $IDcat");
            $stmt->execute();
            $todas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $todas;
        }

        public function IDcat(){
            $objCategoria = new Categoria;
            $categorias = $objCategoria->verCategoria();
            foreach ($categorias as $categoria => $valor){
                if ($_GET["categoria"] == $valor["nombre"]){
                    return $valor["id"];
                }       
            }       
        }

        public function agregarPregunta()
        {
            $puntaje = $_POST["puntuacion"];
            $pregunta = $_POST["pregunta"];
            $correcta = $_POST["opcion_correcta"];
            $op2 = $_POST["opcion2"];
            $op3 = $_POST["opcion3"];
            $op4 = $_POST["opcion4"];
            $CatID = $this->IDcat();

            $link = Conexion::conectar();
            $sql = "INSERT INTO quiz (puntuacion,pregunta,opcion_correcta,opcion2,opcion3,opcion4,categoria_id)
                    VALUES
                          (
                            :score, :quiz, :win, :op2, :op3, :op4, :idCat
                          );";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':score',$puntaje,PDO::PARAM_INT);
            $stmt->bindParam(":quiz",$pregunta,PDO::PARAM_STR);
            $stmt->bindParam(":win",$correcta,PDO::PARAM_STR);
            $stmt->bindParam(":op2",$op2,PDO::PARAM_STR);
            $stmt->bindParam(":op3",$op3,PDO::PARAM_STR);
            $stmt->bindParam(":op4",$op4,PDO::PARAM_STR);
            $stmt->bindParam(':idCat',$CatID);

            $stmt->execute();

        }

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

        public function getIdPregunta()
        {
            return $this->idPregunta;
        }

        public function setIdPregunta($newId)
        {
            $this->idPregunta = $newId;
        }

        public function getCategoria()
        {
                return $this->categoria;
        }
}
