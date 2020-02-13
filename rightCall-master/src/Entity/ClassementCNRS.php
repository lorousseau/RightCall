<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClassementCNRSRepository")
 */
class ClassementCNRS
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
     * @ORM\Column(type="integer")
     */
    private $anneeClassement;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $classementRevue;

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

    public function getAnneeClassement(): ?int
    {
        return $this->anneeClassement;
    }

    public function setAnneeClassement(int $anneeClassement): self
    {
        $this->anneeClassement = $anneeClassement;

        return $this;
    }

    public function getClassementRevue(): ?string
    {
        return $this->classementRevue;
    }

    public function setClassementRevue(string $classementRevue): self
    {
        $this->classementRevue = $classementRevue;

        return $this;
    }
}
