<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/homepage", name="app_homepage")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        return $this->render('app/index.html.twig',[
            'user' => $this->getUser()
        ]);
    }

    /**
     * @Route("/not-the-homepage", name="alternate_homepage")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function alternatatePage()
    {
        return $this->render('app/alternate-page.html.twig',[
            'user' => $this->getUser()
        ]);
    }
}