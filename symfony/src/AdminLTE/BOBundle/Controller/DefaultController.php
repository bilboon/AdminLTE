<?php

namespace AdminLTE\BOBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminLTEBOBundle:Default:index.html.twig');
    }
}
