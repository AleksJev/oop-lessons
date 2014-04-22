<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.22.4
 * Time: 23:12
 */

class TextProductWriter extends ShopProductWriter{
    public function write() {
        $str = "ТОВАРЫ:\n";
        foreach ($this->products as $shopProduct) {
            $str .= $shopProduct->getSummaryLine()."\n";
        }
        print $str;
    }

} 