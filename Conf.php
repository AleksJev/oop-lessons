<?php
/**
 * Created by PhpStorm.
 * User: Aleksejs
 * Date: 14.24.4
 * Time: 02:34
 */

class Conf {
    private $file;
    private $xml;
    private $lastmatch;

    function __construct($file) {
        $this->file = $file;
        if(! file_exists($file)) {
            throw new Exception("Файл '$file'не найден");
        }
        $this->xml = simplexml_load_file($file);
    }

    function write() {
        if(! is_writeable($this->file)) {
            throw new Exception("Файл '{$this->file}'не доступен для записи");
        }
        file_put_contents($this->file, $this->xml->asXML());
    }

    function get($str) {
        $matches = $this->xml->xpath("/conf/item[@name=\"$str\"]");
        if(count($matches)) {
            $this->lastmatch = $matches[0];
            return (string)$matches[0];
        }
        return null;
    }

    function set($key, $value) {
        if(! is_null($this->get($key))) {
            $this->lastmatch[0]=$value;
            return;
        }
        $conf = $this->xml->conf;
        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }

}

$test = new Conf('conf.xml');
//var_dump($test);

print "{$test->get('host')}<br>";
$test->set('test','super');
print "{$test->get('test')}<br>";