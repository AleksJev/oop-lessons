<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.18.4
 * Time: 06:51
 */

class BookProduct {
    public $numPages;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    function __construct( $title, $firstName, $mainName, $price, $numPages) {
        $this->title                = $title;
        $this->producerFirstName    = $firstName;
        $this->producerMainName     = $mainName;
        $this->price                = $price;
        $this->numPages             = $numPages;
    }

    function getNumberOfPages() {
        return $this->numPages;
    }

    function getSummaryLine() {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= "{$this->numPages} стр.";
        return $base;
    }

    function getProducer() {
        return "{$this->producerFirstName}"
             ." {$this->producerMainName}";
    }

} 