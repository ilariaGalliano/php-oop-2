<?php
/*
* Product Class
*/
class Product {

    // Products
    public $deals;
    public $brand;
    public $oper_system;

    // Construct
    public function __construct($deals, $brand, $oper_system){
        $this->deals = $deals;
        $this->brand = $brand;
        $this->oper_system =  $oper_system;
    }

    // Methods
    // Public
    public function getProduct(){
        return $this->brand . '<br>' . 'Operating System: ' . $this->oper_system;
    }
    
    // Protected
    protected function getDeal(){
        return $this->deals == 'New' ? 'New offer' : 'Special offer';
    }

}
