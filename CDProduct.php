<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.18.4
 * Time: 06:42
 */

class CDProduct extends ShopProduct {
    public $playLength = 0;

    public function __construct($title, $firstName, $mainName, $price, $playLength) {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }

    public function getPlayLength() {
        return $this->playLength;
    }

    public function getSummaryLine() {
        $base  = parent::getSummaryLIne();
        $base .= ": Время звучания - {$this->playLength}";
        return $base;
    }

    public function getPrice() {
        return ($this->price);
    }

} 