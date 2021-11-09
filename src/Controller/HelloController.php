<?php

// on n'oublie pas de namespace

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController{
    // on a indiqué dans Route Yaml une méthode hello
    function hello(){
        return $this->render('base.html.twig');
    }
}