<?php 
    class Tabung {
        private $diameter;
        private $tinggi;
        private $r;
        private $phi = 3.14;
        private $luas_selimut=0;

        public function setDiameter ($value) {
            $this->diameter = $value;
            $this->r = $this->diameter / 2;
        }
        public function setTinggi($value) {
            $this-> tinggi = $value;
        }
        public function hitungLuas() {
            $this->luas_selimut = 3.14 * $this->diameter * $this->tinggi;
        }
        public function getLuasSelimut(){
            return $this->luas_selimut = 3.14 * $this->diameter * $this->tinggi;
        }

        public function tes() {
            echo "class tabung berhasil dipanggil";
        }
    }
?>