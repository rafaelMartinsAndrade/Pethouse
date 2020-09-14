<?php
namespace src\models;
use \core\Model;

class Pet extends Model {
    public static function listarUsuario(){
        $pets = Pet::select()->execute();
        return $pets;
    }
}