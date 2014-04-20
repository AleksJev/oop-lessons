<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.18.4
 * Time: 06:42
 */

class CDProduct extends ShopProduct {
    public $playLength;
    public $discount = 0;

    function __construct($title, $firstName, $mainName, $price, $playLength) {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }

    function getPlayLength() {
        return $this->playLength;
    }

    function getSummaryLine() {
        $base  = parent::getSummaryLIne();
        $base .= ": Время звучания - {$this->playLength}";
        return $base;
    }

    function setDiscount($num) {
        $this->discount=$num;
    }

    function getPrice() {
        return ($this->price - $this->discount);
    }

} 