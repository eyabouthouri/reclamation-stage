<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Reclamation;
use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ReclamationType;
class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="app_reclamation")
     */
    public function index(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/addreclamation",name="reclamer")
     */
    public function ajouterreclamation(\Symfony\Component\HttpFoundation\Request $request)
    {

        $Reclamation = new Reclamation();
        $list = $this->getDoctrine()->getRepository(User::class)->find(1);
        $form = $this->createForm(reclamationType::class, $Reclamation);
        $form->handleRequest($request);
            if ($form->isSubmitted()) {
               $Reclamation->setIdu($list);

                $em = $this->getDoctrine()->getManager();
                $em->persist($Reclamation);
                $em->flush();

            }
        return $this->render("reclamation/reclamation.html.twig", array('form' => $form->createView(),'idu'=>$list));


    }
}
