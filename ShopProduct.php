<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.18.4
 * Time: 06:21
 */

class ShopProduct {
    public $title               = "Стандартный товар";
    public $producerMainName    = "Фамилия автора";
    public $producerFirstName   = "Имя автора";
    public $price               = 0;

    function __construct( $title, $firstName, $mainName, $price) {
        $this->title               = $title;
        $this->producerFirstName    = $firstName;
        $this->producerMainName     = $mainName;
        $this->price                = $price; //$this псевдопеременная для присвоения значений соответствующим свойствам объекта
    }

    function getProducer() {
        return "{$this->producerFirstName}"
        ." {$this->producerMainName}";
    }

} 