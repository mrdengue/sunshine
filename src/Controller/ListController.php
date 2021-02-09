<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function index(Request $request)
    {


// $em = $this->getDoctrine()->getManager()->getConnection();
 $em = $this->getDoctrine()->getManager();
 $statement = $em->createQuery('select pacientes.firstname,pacientes.lastname FROM App\Entity\Pacientes pacientes');
 $pacientes = $statement->getResult();

        return $this->render('list/index.html.twig',array(
    'pacientes' => $pacientes));
    }
}
