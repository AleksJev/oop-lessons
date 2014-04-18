<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.18.4
 * Time: 06:22
 */

class ShopProductWriter {
    public function write(ShopProduct $shopProduct ) { //методу передается объект типа ShopProduct
        $str = "{$shopProduct->title}: "
            .$shopProduct->getProducer()
            ." ({$shopProduct->price})<br>";
        print $str;
    }

} 