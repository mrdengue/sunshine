<?php

namespace App\Controller;

use App\Entity\Pacientes;
use App\Form\PacienteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class RegistrationPatientController extends AbstractController
{
    /**
     * @Route("/registration/patient", name="registration_patient")
     */

    public function index(Request $request)
    {

  $patient = new Pacientes();

        $form = $this->createForm(PacienteType::class, $patient);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Save
            $em = $this->getDoctrine()->getManager();
            $em->persist($patient);
            $em->flush();

            return $this->redirectToRoute('list');
        }

        return $this->render('registration_patient/index.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}
