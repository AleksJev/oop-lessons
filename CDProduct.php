<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.18.4
 * Time: 06:42
 */

class CDProduct {
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    function __construct( $title, $firstName, $mainName, $price, $playLength) {
        $this->title                = $title;
        $this->producerFirstName    = $firstName;
        $this->producerMainName     = $mainName;
        $this->price                = $price;
        $this->playLength           = $playLength;
    }

    function getPlayLength() {
        return $this->playLength;
    }

    function getSummaryLine() {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= ": Время звучания - {$this->playLength}";
        return $base;
    }

    function getProducer() {
        return "{$this->producerFirstName}"
              ."{$this->producerMainName}";
    }

} 