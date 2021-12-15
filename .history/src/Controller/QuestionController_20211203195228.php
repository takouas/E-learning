<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Cours;
use App\Form\QuestionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @Route("/question")
 */
class QuestionController extends AbstractController
{

    /**
     * @Route("/index", name="question_index", methods={"GET"})
     */
    public function index(): Response
    {
        $questions = $this->getDoctrine()
            ->getRepository(Question::class)
            ->findAll();

        return $this->render('question/index.html.twig', [
            'questions' => $questions,
        ]);
    }

    /**
     * @Route("/new/{id_cours}", name="question_new", methods={"GET","POST"})
     */
    public function new(Request $request, EntityManagerInterface $em, Cours $id_cours): Response
    {
        $question = new Question();
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $question->setCours($id_cours)
                ->setEnseignant($this->getUser());

            $em->persist($question);
            $em->flush();


            return $this->redirectToRoute("question_index", [
                'id_cours' => $id_cours->getId(),
                'id_question' => $question->getId()
            ]);
        }

        return $this->render('question/new.html.twig', [
            'id_cours' => $id_cours->getId(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="question_show", methods={"GET"})
     */
    public function show(Question $question): Response
    {
        return $this->render('question/show.html.twig', [
            'question' => $question,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="question_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Question $question): Response
    {
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('question_index');
        }

        return $this->render('question/edit.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="question_delete", methods={"POST"})
     */
    public function delete(Request $request, Question $question): Response
    {
        if ($this->isCsrfTokenValid('delete' . $question->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($question);
            $entityManager->flush();
        }

        return $this->redirectToRoute('question_index');
    }

    /**
     * @Route("/{id}/getByCours", name="question_get", methods={"GET","POST"})
     */
    public function getByCours(Request $request, Question $question, $id): Response
    {
        $questions = $this->getDoctrine()
            ->getRepository(Question::class)
            ->findBy(array('cours' => $id));
        return $this->render('question/index.html.twig', [
            'questions' => $questions,
        ]);
    }
}
