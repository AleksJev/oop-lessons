<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.18.4
 * Time: 06:22
 */

class ShopProductWriter {
    public function write($shopProduct ) {
        if ( ! ($shopProduct instanceof CDProduct) &&
             ! ($shopProduct instanceof BookProduct)) {
            die("Передан неверный тип данных");
        }
        $str = "{$shopProduct->title}: "
            .$shopProduct->getProducer()
            ." ({$shopProduct->price})<br>";
        print $str;
    }

} 