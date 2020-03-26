<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Recherche", mappedBy="categories")
     */
    private $recherches;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Appelapublication", mappedBy="categories")
     */
    private $appelapublications;


    public function __construct()
    {
        $this->recherches = new ArrayCollection();
        $this->appelapublications = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|Recherche[]
     */
    public function getRecherches(): Collection
    {
        return $this->recherches;
    }

    public function addRecherch(Recherche $recherch): self
    {
        if (!$this->recherches->contains($recherch)) {
            $this->recherches[] = $recherch;
            $recherch->addCategory($this);
        }

        return $this;
    }

    public function removeRecherch(Recherche $recherch): self
    {
        if ($this->recherches->contains($recherch)) {
            $this->recherches->removeElement($recherch);
            $recherch->removeCategory($this);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->nom;

    }

    /**
     * @return Collection|Appelapublication[]
     */
    public function getAppelapublications(): Collection
    {
        return $this->appelapublications;
    }

    public function addAppelapublication(Appelapublication $appelapublication): self
    {
        if (!$this->appelapublications->contains($appelapublication)) {
            $this->appelapublications[] = $appelapublication;
            $appelapublication->addCategory($this);
        }

        return $this;
    }

    public function removeAppelapublication(Appelapublication $appelapublication): self
    {
        if ($this->appelapublications->contains($appelapublication)) {
            $this->appelapublications->removeElement($appelapublication);
            $appelapublication->removeCategory($this);
        }

        return $this;
    }

  }
