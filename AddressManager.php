<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.18.4
 * Time: 06:23
 */

class AddressManager {
    private $addresses = array("209.131.36.159",/* "74.125.19.106",*/ "80.255.226.36");

    function outputAddresses($resolve) {
        if ( ! is_string($resolve)) {
            die("методу outputAddress() требуется булев элемент<br>");
        }
        foreach ($this->addresses as $address) {
            print $address;
            if ($resolve == 'true') {
                print " (". gethostbyaddr($address).")";
            }
            print "<br>";
        }
    }

}


$settings   = simplexml_load_file("settings.xml");
$manager    = new AddressManager();
$manager->outputAddresses((string) $settings->resolvedomains);

/*
 * Любую проблему можно решить путем введения дополнительного уровня абстракции,
 * кроме проблемы слишком большого количества уровней абстракции
 */