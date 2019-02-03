<?php

namespace JR\FormulaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $prestation = $this->getDoctrine()->getManager()
                    ->getRepository('FormulaireBundle:Prestation')
                    ->findAll();

        return $this->render('FormulaireBundle:Default:index.html.twig',array('prestation'=>$prestation));
    }
}
