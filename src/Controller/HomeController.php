<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response;

class HomeCOntroller  extends AbstractController

{   
        public function index(): Response
        {
            return $this->render('home.html.twig');
        }
}
