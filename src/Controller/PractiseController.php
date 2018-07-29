<?php

namespace App\Controller;

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
