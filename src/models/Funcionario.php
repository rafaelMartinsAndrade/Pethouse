<?php
namespace src\models;
use \core\Model;

class Funcionario extends Model {
    public static function listarUsuario(){
        $funcionarios = Funcionario::select()->execute();
        return $funcionarios;
    }
}