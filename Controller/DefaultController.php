<?php

namespace alchemistsoft\TextMagicApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TextMagicApiBundle:Default:index.html.twig');
    }
}
