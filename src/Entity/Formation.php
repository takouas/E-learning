<?php

namespace App\Entity;

use App\Repository\FormationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=FormationRepository::class)
 */
class Formation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     *      message="Ce champ est requis."
     * )
     * @Assert\Length(
     *      min = 2,
     *      max = 255,
     *      minMessage = "Ce champ ne doit pas être inférieure à {{ limit }} caractères.",
     *      maxMessage = "Ce champ ne doit pas dépasser {{ limit }} caractères."
     * )
     */
    private $titre;

    /**
     * @ORM\OneToMany(targetEntity=ClasseDeCours::class, mappedBy="formation")
     */
    private $classeDeCours;

    /**
     * @ORM\OneToMany(targetEntity=Etudiant::class, mappedBy="Formation")
     */
    private $etudiants;

    public function __construct()
    {
        $this->classeDeCours = new ArrayCollection();
        $this->etudiants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * @return Collection|ClasseDeCours[]
     */
    public function getClasseDeCours(): Collection
    {
        return $this->classeDeCours;
    }

    public function addClasseDeCour(ClasseDeCours $classeDeCour): self
    {
        if (!$this->classeDeCours->contains($classeDeCour)) {
            $this->classeDeCours[] = $classeDeCour;
            $classeDeCour->setFormation($this);
        }

        return $this;
    }

    public function removeClasseDeCour(ClasseDeCours $classeDeCour): self
    {
        if ($this->classeDeCours->removeElement($classeDeCour)) {
            // set the owning side to null (unless already changed)
            if ($classeDeCour->getFormation() === $this) {
                $classeDeCour->setFormation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Etudiant[]
     */
    public function getEtudiants(): Collection
    {
        return $this->etudiants;
    }

    public function addEtudiant(Etudiant $etudiant): self
    {
        if (!$this->etudiants->contains($etudiant)) {
            $this->etudiants[] = $etudiant;
            $etudiant->setFormation($this);
        }

        return $this;
    }

    public function removeEtudiant(Etudiant $etudiant): self
    {
        if ($this->etudiants->removeElement($etudiant)) {
            // set the owning side to null (unless already changed)
            if ($etudiant->getFormation() === $this) {
                $etudiant->setFormation(null);
            }
        }

        return $this;
    }
}
