<?php

    namespace OOP;
    
    class Bike{
        private $modelis;
        private $marke;
        private $kaina;
        private $svoris;
        private $variklis;
        private $galingumas;
        private $maxGreitis;
        private $aprasymas;
        private $vietos;

        public function __construct($modelis, $marke){ 
            $this->modelis = $modelis;
            $this->marke = $marke;
        }
        public function __toString(){
            return $this->modelis . ' ' . $this->marke;
        }

        public function setModelis($modelis){
            $this->modelis = $modelis;
        }

        public function setMarke($marke){
            $this->marke = $marke;
        }
        public function setKaina($kaina){
            $this->kaina = $kaina;
        }
        public function setSvoris($svoris){
            $this->svoris = $svoris;
        }
        public function setVariklis($variklis){
            $this->variklis = $variklis;
        }
        public function setGalingumas($galingumas){
            $this->galingumas = $galingumas;
        }
        public function setMaxGreitis($maxGreitis){
            $this->maxGreitis = $maxGreitis;
        }
        public function setAprasymas($aprasymas){
            $this->aprasymas = $aprasymas;
        }
        public function setVietos($vietos){
            $this->vietos = $vietos;
        }

        public function getModelis(){
            return $this ->modelis;
        }
        public function getMarke(){
            return $this ->marke;
        }
        public function getKaina(){
            return $this ->kaina;
        }
        public function getSvoris(){
            return $this ->svoris;
        }
        public function getVariklis(){
            return $this ->variklis;
        }
        public function getGalingumas(){
            return $this ->galingumas;
        }
        public function getMaxGreitis(){
            return $this ->maxGreitis;
        }
        public function getAprasymas(){
            return $this ->aprasymas;
        }
        public function getVietos(){
            return $this ->vietos;
        }
    }

        // public function getInfo(){ // geteris
        //     return [
        //         $this->name,
        //         $this->email,
        //         $this->location,
        //         $this->role,
        //         $this->number
        //     ];
        // }