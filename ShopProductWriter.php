<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.18.4
 * Time: 06:22
 */

abstract class ShopProductWriter {
    protected $products = array();

    public function addProduct( ShopProduct $shopProduct) {
        $this->products[] = $shopProduct;
    }

    abstract public function write();

} 