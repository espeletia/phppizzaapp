<?php

    class Kosik implements Iterator{
        private $kosik = [];

        private $currentIndex = 0;

        public function __construct($kosik){ $this->kosik = $kosik; }

        public function getKosik(){ return $this->kosik; }

        public function current() { return current($this->kosik); }

        public function key(){ return key($this->kosik); }

        public function next(){ return next($this->kosik); }

        public function rewind(){ return reset($this->kosik); }

        public function valid(){ return key($this->kosik) !== null; }
    }
?>
