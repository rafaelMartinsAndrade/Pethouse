<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function home() {
        $this->render('home');
    }

    public function loginrender() {
        $this->render('login');
    }

    public function registrousuariorender() {
        $this->render('registrousuario');
    }

    public function sobreP($args) {
        print_r($args);
    }

}