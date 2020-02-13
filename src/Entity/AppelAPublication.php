<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AppelAPublicationRepository")
 */
class AppelAPublication
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
    private $idAppelAPublication;

    /**
     * @ORM\Column(type="text")
     */
    private $titreAppel;

    /**
     * @ORM\Column(type="text")
     */
    private $resume;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFinSoumission;

    /**
     * @ORM\Column(type="integer")
     */
    private $idRevue;

    /**
     * @ORM\Column(type="text")
     */
    private $lien;

    /**
     * @ORM\Column(type="text")
     */
    private $titreRevueTrouve;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $sourceCall;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAppelAPublication(): ?int
    {
        return $this->idAppelAPublication;
    }

    public function setIdAppelAPublication(int $idAppelAPublication): self
    {
        $this->idAppelAPublication = $idAppelAPublication;

        return $this;
    }

    public function getTitreAppel(): ?string
    {
        return $this->titreAppel;
    }

    public function setTitreAppel(string $titreAppel): self
    {
        $this->titreAppel = $titreAppel;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getDateFinSoumission(): ?\DateTimeInterface
    {
        return $this->dateFinSoumission;
    }

    public function setDateFinSoumission(\DateTimeInterface $dateFinSoumission): self
    {
        $this->dateFinSoumission = $dateFinSoumission;

        return $this;
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

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    public function getTitreRevueTrouve(): ?string
    {
        return $this->titreRevueTrouve;
    }

    public function setTitreRevueTrouve(string $titreRevueTrouve): self
    {
        $this->titreRevueTrouve = $titreRevueTrouve;

        return $this;
    }

    public function getSourceCall(): ?string
    {
        return $this->sourceCall;
    }

    public function setSourceCall(string $sourceCall): self
    {
        $this->sourceCall = $sourceCall;

        return $this;
    }
}
