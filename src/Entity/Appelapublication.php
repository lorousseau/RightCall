<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Appelapublication
 *
 * @ORM\Table(name="appelAPublication")
 * @ORM\Entity
 */
class Appelapublication
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAppelAPublication", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idappelapublication;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titreAppel", type="text", length=65535, nullable=true)
     */
    private $titreappel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resume", type="text", length=65535, nullable=true)
     */
    private $resume;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateFinSoumission", type="date", nullable=true)
     */
    private $datefinsoumission;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datePublication", type="date", nullable=true)
     */
    private $datepublication;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idRevue", type="integer", nullable=true)
     */
    private $idrevue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lien", type="text", length=65535, nullable=true)
     */
    private $lien;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titreRevueTrouve", type="text", length=65535, nullable=true)
     */
    private $titrerevuetrouve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sourceCall", type="string", length=45, nullable=true)
     */
    private $sourcecall;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Categorie", inversedBy="appelapublications")
     * @ORM\JoinTable(name="appelAPublication_categorie",
     * joinColumns={@ORM\JoinColumn(name="appelapublications_id", referencedColumnName="idAppelAPublication")},
     * inverseJoinColumns={@ORM\JoinColumn(name="categorie_id", referencedColumnName="id")}
     * )
     */
    private $categories;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    public function getIdappelapublication(): ?int
    {
        return $this->idappelapublication;
    }

    public function getTitreappel(): ?string
    {
        return $this->titreappel;
    }

    public function setTitreappel(?string $titreappel): self
    {
        $this->titreappel = $titreappel;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(?string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getDatefinsoumission(): ?\DateTimeInterface
    {
        return $this->datefinsoumission;
    }

    public function setDatefinsoumission(?\DateTimeInterface $datefinsoumission): self
    {
        $this->datefinsoumission = $datefinsoumission;

        return $this;
    }

    public function getDatepublication(): ?\DateTimeInterface
    {
        return $this->datepublication;
    }

    public function setDatepublication(?\DateTimeInterface $datepublication): self
    {
        $this->datepublication = $datepublication;

        return $this;
    }

    public function getIdrevue(): ?int
    {
        return $this->idrevue;
    }

    public function setIdrevue(?int $idrevue): self
    {
        $this->idrevue = $idrevue;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(?string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    public function getTitrerevuetrouve(): ?string
    {
        return $this->titrerevuetrouve;
    }

    public function setTitrerevuetrouve(?string $titrerevuetrouve): self
    {
        $this->titrerevuetrouve = $titrerevuetrouve;

        return $this;
    }

    public function getSourcecall(): ?string
    {
        return $this->sourcecall;
    }

    public function setSourcecall(?string $sourcecall): self
    {
        $this->sourcecall = $sourcecall;

        return $this;
    }

    /**
     * @return Collection|Categorie[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categorie $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
        }

        return $this;
    }

    public function removeCategory(Categorie $category): self
    {
        if ($this->categories->contains($category)) {
            $this->categories->removeElement($category);
        }

        return $this;
    }

}
