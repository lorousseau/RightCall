<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classementhceres
 *
 * @ORM\Table(name="classementHCERES")
 * @ORM\Entity(repositoryClass="App\Repository\ClassementHCERESRepository")
 */
class Classementhceres
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRevue", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idrevue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anneeClassement", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anneeclassement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="classementRevue", type="string", length=3, nullable=true)
     */
    private $classementrevue;

    public function getIdrevue(): ?int
    {
        return $this->idrevue;
    }

    public function getAnneeclassement(): ?\DateTimeInterface
    {
        return $this->anneeclassement;
    }

    public function getClassementrevue(): ?string
    {
        return $this->classementrevue;
    }

    public function setClassementrevue(?string $classementrevue): self
    {
        $this->classementrevue = $classementrevue;

        return $this;
    }


}
