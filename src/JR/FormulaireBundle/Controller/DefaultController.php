<?php

namespace JR\FormulaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormulaireBundle:Default:index.html.twig');
    }
}
