<?php
namespace src\models;
use \core\Model;

class Cliente extends Model {
    public static function returnh(){
        $_h = Model::$_h;
        return $_h;
    }
}