<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.23.4
 * Time: 22:44
 */
abstract class DomainObject {
    public static function create() {
        return new static();
    }
}

class User extends DomainObject {

}

class Document extends DomainObject {

}

print_r(Document::create());