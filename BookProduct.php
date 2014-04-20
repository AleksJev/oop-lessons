<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.18.4
 * Time: 06:51
 */

class BookProduct extends ShopProduct {
    public $numPages =0;

    public function __construct($title, $firstName, $mainName, $price, $numPages) {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }

    public function getNumberOfPages() {
        return $this->numPages;
    }

    public function getSummaryLine() {
        $base  = parent::getSummaryLine();
        $base .= "{$this->numPages} стр.";
        return $base;
    }

    public function getPrice() {
        return $this->price;
    }
} 