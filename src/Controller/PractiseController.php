<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PractiseController extends AbstractController 
{
    /**
     * @Route("/practise", name="practise")
     */
    public function index(SessionInterface $session, UrlGeneratorInterface $urlGenerator)
    {
        $session->set('key', 'value');
        $url = $urlGenerator->generate('practise');

        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/PractiseController.php',
        //     'url' => $url,
        //     'keu' => $session->get('key'),
        // ]);

        return $this->render('practise/practise.html.twig');
    }
}
