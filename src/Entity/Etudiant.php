<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=EtudiantRepository::class)
 */
class Etudiant extends User
{

    /**
     * @ORM\ManyToOne(targetEntity=Formation::class, inversedBy="etudiants")
     * @Assert\NotBlank(
     *      message="Ce champ est requis."
     * )
     */
    private $formation;

    public function getFormation(): ?Formation
    {
        return $this->formation;
    }

    public function setFormation(?Formation $formation): self
    {
        $this->formation = $formation;

        return $this;
    }
}
