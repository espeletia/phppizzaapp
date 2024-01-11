<?php
class ToppingArray implements Iterator
{
    private $toppings = [];

    function __construct($toppings) { $this->toppings = $toppings; }

    public function current() { return current($this->toppings); }

    public function key() { return key($this->toppings); }

    public function next() { return next($this->toppings); }

    public function rewind() { return reset($this->toppings); }

    public function valid() { return key($this->toppings) !== null; }


}



?>
