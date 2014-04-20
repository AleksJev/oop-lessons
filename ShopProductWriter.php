<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.18.4
 * Time: 06:22
 */

class ShopProductWriter {
    private $products = array();

    public function addProduct( ShopProduct $shopProduct) {
        $this->products[] = $shopProduct;
    }

    public function write() {
        $str = "";
        foreach ($this->products as $shopProduct) {
            $str .= "{$shopProduct->title}: ";
            $str .= $shopProduct->getProducer();
            $str .=  " ({$shopProduct->getPrice()}) <br>";
        }
        print $str;
    }

} 