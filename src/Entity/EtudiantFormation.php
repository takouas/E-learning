<?php

namespace App\Entity;

use App\Repository\EtudiantFormationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=EtudiantFormationRepository::class)
 */
class EtudiantFormation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

   /**
     * @ORM\ManyToOne(targetEntity=Formation::class, inversedBy="etudiantFormation")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank(
     *      message="Ce champ est requis."
     * )
     */
    private $formation;

    /**
     * @ORM\ManyToOne(targetEntity=Etudiant::class, inversedBy="etudiantFormation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etudiant;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getFormation(): ?Formation
    {
        return $this->formation;
    }

    public function setFormation(?Formation $formation): self
    {
        $this->formation = $formation;

        return $this;
    }
    public function getEtudiant(): ?Etudiant
    {
        return $this->etudiant;
    }

    public function setEtudiant(?Etudiant $etudiant): self
    {
        $this->etudiant = $etudiant;

        return $this;
    }
}
