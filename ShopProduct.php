<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.18.4
 * Time: 06:21
 */

class ShopProduct {
    public $numPages;
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    function __construct( $title, $firstName, $mainName, $price, $numPages=0, $playLength=0) {
        $this->title                = $title;
        $this->producerFirstName    = $firstName;
        $this->producerMainName     = $mainName;
        $this->price                = $price; //$this псевдопеременная для присвоения значений соответствующим свойствам объекта
        $this->numPages             = $numPages;
        $this->playLength           = $playLength;
    }

    function getNumberOfPages() {
        return $this->numPages;
    }

    function getPlayLength() {
        return $this->playLength;
    }

    function getProducer() {
        return "{$this->producerFirstName}"
             ." {$this->producerMainName}";
    }

} 