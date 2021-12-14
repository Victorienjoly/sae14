<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JolyController extends AbstractController
{
    /**
     * @Route("/joly", name="joly")
     */
    public function index(): Response
    {
        return $this->render('joly/index.html.twig', [
            'controller_name' => 'JolyController',
        ]);
    }
}
