<?php
    class operaciones{
        private $a;
        private $b;
        public function __construct($a,$b)
        {
            $this->a=$a;
            $this->b=$b;
        }
        public function suma()
        {
            return $this->a+$this->b;
        }
        public function resta()
        {
            return $this->a-$this->b;
        }
        public function multiplicacion()
        {
            return $this->a*$this->b;
        }
        public function division()
        {
            return $this->a/$this->b;
        }
    }
?>