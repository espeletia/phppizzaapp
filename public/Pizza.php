<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
class Pizza
{
    private $toppings;
    private $base;

    public function getToppings(){ return $this->toppings; }

    public function getBase(){ return $this->base; }

    function __construct($toppings, $base) { $this->toppings = new ToppingArray($toppings); $this->base = $base; }

}

?>
