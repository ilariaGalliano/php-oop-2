<?php

include_once __DIR__ . '/product.php';

/**
* Computer
*/

class Computer extends Product {
    public $pc;

    public function __construct($deals, $brand, $oper_system, $pc){
        // 1 passare valori originali al padre
            parent::__construct($deals, $brand, $oper_system);
        // 2 set new prop
        $this->pc = $pc;
    }

    public function modelPc(){
        return "Computer: $this->pc <br> 
                Type of Deal: $this->deals <br> 
                Brand: $this->brand <br> 
                Operating system: $this->oper_system";
    }  
    
}