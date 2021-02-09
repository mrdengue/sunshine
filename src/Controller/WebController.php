<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class WebController extends AbstractController
{

  /**
     * @Route("/web", name="web")
     */
public function indexAction()
{
    return $this->redirect('http://mapachesoft.net');
}

}
