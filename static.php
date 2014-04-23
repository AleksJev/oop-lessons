<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.23.4
 * Time: 22:44
 */
abstract class DomainObject {}

class User extends DomainObject {
    public static function create() {
        return new User();
    }
}

class Document extends DomainObject {
    public static function create() {
        return new Document();
    }
}