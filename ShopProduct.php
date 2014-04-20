<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.18.4
 * Time: 06:21
 */

class ShopProduct {
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;
    private $discount = 0;

    public function __construct( $title, $firstName, $mainName, $price) {
        $this->title                = $title;
        $this->producerFirstName    = $firstName;
        $this->producerMainName     = $mainName;
        $this->price                = $price;
    }

    public function getProducerFirstName() {
        return $this->producerFirstName;
    }

    public function setDiscount($num) {
        return $this->discount = $num;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPrice() {
        return ($this->price - $this->discount);
    }

    function getProducer() {
        return "{$this->producerFirstName}"
             ." {$this->producerMainName}";
    }

    function getSummaryLine() {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }
} 