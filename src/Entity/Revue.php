<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Revue
 *
 * @ORM\Table(name="revue")
 * @ORM\Entity
 */
class Revue
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_revue", type="integer", nullable=false)
     */
    private $idRevue;

    /**
     * @var string
     *
     * @ORM\Column(name="issn", type="text", length=0, nullable=false)
     */
    private $issn;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_revue", type="text", length=0, nullable=false)
     */
    private $titreRevue;

    /**
     * @var string
     *
     * @ORM\Column(name="url_site_revue", type="text", length=0, nullable=false)
     */
    private $urlSiteRevue;

    /**
     * @var string
     *
     * @ORM\Column(name="classement_cnrs", type="string", length=3, nullable=false)
     */
    private $classementCnrs;

    /**
     * @var string
     *
     * @ORM\Column(name="classement_fnege", type="string", length=3, nullable=false)
     */
    private $classementFnege;

    /**
     * @var string
     *
     * @ORM\Column(name="classement_hceres", type="string", length=3, nullable=false)
     */
    private $classementHceres;

    /**
     * @var string
     *
     * @ORM\Column(name="widget_recap", type="text", length=0, nullable=false)
     */
    private $widgetRecap;

    /**
     * @var string
     *
     * @ORM\Column(name="editeur", type="string", length=300, nullable=false)
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

    public function getClassementCnrs(): ?string
    {
        return $this->classementCnrs;
    }

    public function setClassementCnrs(string $classementCnrs): self
    {
        $this->classementCnrs = $classementCnrs;

        return $this;
    }

    public function getClassementFnege(): ?string
    {
        return $this->classementFnege;
    }

    public function setClassementFnege(string $classementFnege): self
    {
        $this->classementFnege = $classementFnege;

        return $this;
    }

    public function getClassementHceres(): ?string
    {
        return $this->classementHceres;
    }

    public function setClassementHceres(string $classementHceres): self
    {
        $this->classementHceres = $classementHceres;

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
