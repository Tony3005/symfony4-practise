<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PractiseController extends AbstractController 
{
    /**
     * @Route("/practise", name="practise")
     */
    public function index() 
    {
        return $this->render('practise/practise.html.twig');
    }
}
