<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Question;
use App\Entity\Reponse;
use App\Entity\QcmHistory;
use App\Form\CategorieType;
use App\Form\QuestionType;
use App\Form\ReponseType;
use App\Repository\QcmHistoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QcmHistoryController extends AbstractController
{
    /**
     * @Route("/quizz/history", name="admin_quizz_history")
     */
    public function index(QcmHistoryRepository $qcmHistoryRepository): Response
    {
        return $this->render('admin/QcmHistory/index.html.twig', [
            'qcmHistory' => $qcmHistoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/quizz/history/{id}", name="quizz_history")
     */
    public function userHistory(QcmHistoryRepository $qcmHistoryRepository, $id): Response
    {
        return $this->render('admin/QcmHistory/show.html.twig', [
            'qcmHistory' => $qcmHistoryRepository->findBy(array('user' => $id)),
        ]);
    }

    /**
     * @Route("/quizz/session/history", name="quizz_history_sessions")
     */
    public function sessionHistory(QcmHistoryRepository $qcmHistoryRepository): Response
    {
        $session = $this->get('session');
        $totalScore = $session->get('score');
        return $this->render('admin/QcmHistory/sessionHistory.html.twig', [
            'scoreTotal' => $totalScore,
        ]);
    }
}
