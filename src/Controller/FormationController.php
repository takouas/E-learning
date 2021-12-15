<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Form\FormationType;
use App\Repository\FormationRepository;
use Doctrine\ORM\EntityManagerInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Form\Type\VichImageType;

class FormationController extends AbstractController
{

    public function __construct(FlashyNotifier $flashy)
    {
        $this->flashy = $flashy;
    }

    /**
     * @Route("/formations", name="formation_index", methods={"GET"})
     */
    public function index(FormationRepository $formationRepository): Response
    {
        $formations = $formationRepository->findAll();
        return $this->render('/formation/index.html.twig', compact("formations"));
    }

    /**
     * @Route("/formations/creer", name="formation_creer", methods={"GET","POST"})
     */
    public function creer(Request $request, EntityManagerInterface $em): Response
    {
        $formation = new Formation;

        $form = $this->createForm(FormationType::class, $formation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($formation);
            $em->flush();

            $this->flashy->success('La Formation a bien été crée !');

            return $this->redirectToRoute('formation_index');
        }

        return $this->render('formation/creer.html.twig', [
            'formFormation' => $form->createView()
        ]);
    }

    /**
     * @Route("/formations/{id<[0-9]+>}/editer", name="formation_editer")
     */
    public function modifier(Formation $formation, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(FormationType::class, $formation, [
            'method' => 'PUT'
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($formation);
            $em->flush();

            $this->flashy->success('La formation a été mise à jour !');

            return $this->redirectToRoute('formation_index');
        }

        return $this->render('formation/editer.html.twig', [
            'formation' => $formation,
            'formFormation' => $form->createView()
        ]);
    }

    /**
     * @Route("/formations/{id<[0-9]+>}/supprimer", name="formation_supprimer")
     */
    public function supprimer(Formation $formation, EntityManagerInterface $em): Response
    {
        $em->remove($formation);
        $em->flush();

        $this->flashy->success('La Formation a bien été supprimée !');

        return $this->redirectToRoute('formation_index');
    }
}
