<?php
include_once __DIR__ . '/product.php';

/**
 * Phones
 */

class Phones extends Product {
    public $phone;

    public function setPhone($phone){
        $this->phone = $phone;
    }
    public function getPhone(){
        return $this->phone;
    }

    // Methods
    public function printPhone(){
        $corr_phone = parent::getDeal();
        $product = parent::getProduct();
        return "Type of deal: $corr_phone <br> Brand: $product";
    }
}
