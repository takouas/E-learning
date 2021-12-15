<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Entity\Question;
use App\Entity\Reponse;
use App\Entity\QcmHistory;
use App\Form\CoursType;
use App\Form\QuestionType;
use App\Form\ReponseType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
/**
 * @Route("/quizz")
 */

class QcmController extends AbstractController
{
    /**
     * @Route("/", name="quizz_index", methods={"GET"})
     */
    public function index(): Response
    {
        $courss = $this->getDoctrine()
            ->getRepository(Cours::class)
            ->findAll();

        return $this->render('quizz/index.html.twig', [
            'courss' => $courss,
        ]);
    }

    /**
     * @Route("/new", name="quizz_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');
        $cours = new Cours();
        $form = $this->createForm(CoursType::class, $cours);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cours);
            $entityManager->flush();

            return $this->redirectToRoute('quizz_index');
        }

        return $this->render('cours/userNew.html.twig', [
            'cours' => $cours,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/newQuestion", name="quizz_new_question", methods={"GET","POST"})
     */
    public function newQuestion(Request $request): Response
    {
        $question = new Question();
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($question);
            $entityManager->flush();

            return $this->redirectToRoute('quizz_index');
        }

        return $this->render('question/userNew.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/newReponse", name="quizz_new_response", methods={"GET","POST"})
     */
    public function newReponse(Request $request): Response
    {
        $reponse = new Reponse();
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reponse);
            $entityManager->flush();

            return $this->redirectToRoute('quizz_index');
        }

        return $this->render('reponse/userNew.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/show", name="quizz_get", methods={"GET","POST"})
     */
    public function getQuizz(Request $request, $id): Response
    {
        $score = 0;
        $numberOfQuestions = 0;
        $n=0;

        $questions = $this->getDoctrine()
            ->getRepository(Question::class)
            ->findBy(array('cours' => $id));

        $post = $request->request->all();
        if (!empty($post)) {
            foreach($post as $answer) {
                $numberOfQuestions++;

                $checkAnswer = $this->getDoctrine()
                            ->getRepository(Reponse::class)
                            ->findBy(array('reponse' => $answer));
                if($checkAnswer[$n]->getReponseExpected() == true) {
                    $score++;  
                }
                $n++;
            }
            $courss = $this->getDoctrine()
                ->getRepository(Cours::class)
                ->findAll();

            $currentCours = $this->getDoctrine()
                        ->getRepository(Cours::class)
                        ->findBy(array('id' => $id));
            
            $currentUser = $this->getUser();

            if (!empty($currentUser)) {

                $datePassed = date("d-m-Y H:i:s");
    
                $entityManager = $this->getDoctrine()->getManager();
    
                $quizzHistory = new QcmHistory();
                $quizzHistory->setUser($currentUser);
                $quizzHistory->setCours($currentCours[0]);
                $quizzHistory->setScore($score);
                $quizzHistory->setNumberOfQuestions($numberOfQuestions);
                $quizzHistory->setDatePassed($datePassed);
    
                $entityManager->persist($quizzHistory);
                $entityManager->flush();
                
                return $this->render('quizz/index.html.twig', [
                    'score' => $score."/".$numberOfQuestions,
                    'courss' => $courss,
                    'currentCours' => $currentCours,
                    'user' => $currentUser
                ]);
            } else {
                $session = $this->get('session');
                if(!$this->getUser()) {
                    $currentQuizzScore = [
                        'cours' => $currentCours[0]->getName(),
                        'score' => $score,
                        'numberOfQuestions' => $numberOfQuestions,
                        'datePassed' =>  date("d-m-Y H:i:s")
                    ];
                    $oldQuizzScore = $session->get('score');
                    array_push($oldQuizzScore, $currentQuizzScore);
                    $session->set('score', $oldQuizzScore);
                }


                $totalScore = $session->get('score');
                return $this->render('quizz_history/sessionHistory.html.twig', [
                    'scoreTotal' => $totalScore,
                ]);
            }

        }

        return $this->render('quizz/show.html.twig', [
            'questions' => $questions
        ]);

    }
}