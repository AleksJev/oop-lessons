<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.18.4
 * Time: 06:17
 */
include('ShopProduct.php');
include('ShopProductWriter.php');
include('CDProduct.php');
include('BookProduct.php');


$product1   = new ShopProduct("Собачье сердце", "Михаил", "Булгаков", 5.99);
$writer     = new ShopProductWriter();
//$writer->write($product1);


$product2 = new ShopProduct("Пропавший без вести", "Группа", "ДДТ", 10.99, null, 60.33);
print "Исполнитель: {$product2->getProducer()}<br>";