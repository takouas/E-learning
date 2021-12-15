<?php

namespace App\Entity;

use App\Repository\QcmHistoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QcmHistoryRepository::class)
 */
class QcmHistory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="qcmHistories")
     * @ORM\JoinColumn(name="id_user", nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Cours::class)
     * @ORM\JoinColumn(name="id_cours", nullable=false)
     */
    private $cours;

    /**
     * @ORM\Column(type="integer")
     */
    private $score;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberOfQuestions;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $datePassed;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCours(): ?Cours
    {
        return $this->cours;
    }

    public function setCours(?Cours $cours): self
    {
        $this->cours = $cours;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getNumberOfQuestions(): ?int
    {
        return $this->numberOfQuestions;
    }

    public function setNumberOfQuestions(int $numberOfQuestions): self
    {
        $this->numberOfQuestions = $numberOfQuestions;

        return $this;
    }

    public function getDatePassed(): ?string
    {
        return $this->datePassed;
    }

    public function setDatePassed(string $datePassed): self
    {
        $this->datePassed = $datePassed;

        return $this;
    }

}
