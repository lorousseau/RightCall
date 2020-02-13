<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RevueRepository")
 */
class Revue
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idRevue;

    /**
     * @ORM\Column(type="text")
     */
    private $issn;

    /**
     * @ORM\Column(type="text")
     */
    private $titreRevue;

    /**
     * @ORM\Column(type="text")
     */
    private $urlSiteRevue;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $classementCNRS;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $classementFNEGE;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $classementHCERES;

    /**
     * @ORM\Column(type="text")
     */
    private $widgetRecap;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $editeur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRevue(): ?int
    {
        return $this->idRevue;
    }

    public function setIdRevue(int $idRevue): self
    {
        $this->idRevue = $idRevue;

        return $this;
    }

    public function getIssn(): ?string
    {
        return $this->issn;
    }

    public function setIssn(string $issn): self
    {
        $this->issn = $issn;

        return $this;
    }

    public function getTitreRevue(): ?string
    {
        return $this->titreRevue;
    }

    public function setTitreRevue(string $titreRevue): self
    {
        $this->titreRevue = $titreRevue;

        return $this;
    }

    public function getUrlSiteRevue(): ?string
    {
        return $this->urlSiteRevue;
    }

    public function setUrlSiteRevue(string $urlSiteRevue): self
    {
        $this->urlSiteRevue = $urlSiteRevue;

        return $this;
    }

    public function getClassementCNRS(): ?string
    {
        return $this->classementCNRS;
    }

    public function setClassementCNRS(string $classementCNRS): self
    {
        $this->classementCNRS = $classementCNRS;

        return $this;
    }

    public function getClassementFNEGE(): ?string
    {
        return $this->classementFNEGE;
    }

    public function setClassementFNEGE(string $classementFNEGE): self
    {
        $this->classementFNEGE = $classementFNEGE;

        return $this;
    }

    public function getClassementHCERES(): ?string
    {
        return $this->classementHCERES;
    }

    public function setClassementHCERES(string $classementHCERES): self
    {
        $this->classementHCERES = $classementHCERES;

        return $this;
    }

    public function getWidgetRecap(): ?string
    {
        return $this->widgetRecap;
    }

    public function setWidgetRecap(string $widgetRecap): self
    {
        $this->widgetRecap = $widgetRecap;

        return $this;
    }

    public function getEditeur(): ?string
    {
        return $this->editeur;
    }

    public function setEditeur(string $editeur): self
    {
        $this->editeur = $editeur;

        return $this;
    }
}
