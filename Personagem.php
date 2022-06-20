<?php
    include_once "Poder.php";
    include_once "Bando.php";

    class Personagem extends Poder implements Bando{
        private $nome; //class Personagem
        private $poder; //class Poder
        private $nomeBando; //interface Bando
        private $nivelBando; //interface Bando

        public function __construct($nome, $poder){
            $this->nome = $nome;
            $this->poder = $poder;
        }

        //metodos da classe Personagem
        public function getNome(){
            return $this->nome;
        }
        //metodos da classe Poder
        public function getPoder(){
            switch($this->poder){
                case 1:
                    $this->poder = "gomu gomu no Mi";
                    return $this->poder;
                break;
                case 2:
                    $this->poder = "yami yami no mi";
                    return $this->poder;
                break;
                case 3:
                    $this->poder = "ope ope no mi";
                    return $this->poder;
                break;
            }
        }
        //metodos da interface
        public function getNomeBando(){
            switch($this->nomeBando){
                case 1:
                    $this->nomeBando = "Bando do Luffy";
                    return $this->nomeBando;
                break;
                case 2:
                    $this->nomeBando = "Bando do Shanks";
                    return $this->nomeBando;
                break;
                case 3:
                    $this->nomeBando = "Bando do Barba Negra";
                    return $this->nomeBando;
                break;
            }
        }
        public function setNomeBando($nomeBando){
            $this->nomeBando = $nomeBando;
        }
        public function getNivelBando(){
            return $this->nivelBando;
        }
        public function setNivelBando($nomeBando){

            switch($nomeBando){
                case 1:
                    $this->nivelBando = 8000;
                break;
                case 2:
                    $this->nivelBando = 16000;
                break;
                case 3:
                    $this->nivelBando = 10000;
                break;
            }
            
        }

    }
?>