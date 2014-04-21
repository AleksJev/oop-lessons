<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.20.4
 * Time: 09:13
 */

class StaticExample {
    static $aNum = 0;

    static public function sayHallo() {
        print "Hello!";
    }

}

print StaticExample::$aNum;
StaticExample::sayHello();