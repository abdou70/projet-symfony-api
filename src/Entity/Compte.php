<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CompteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
 * @ApiFilter(SearchFilter::class, properties={"numcompte": "exact"})
 * @ORM\Entity(repositoryClass=CompteRepository::class)
 */
class Compte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numcompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numagence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ninea;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $raisonsocial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateOuv;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fraisouv;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="comptes")
     */
    private $client;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumcompte(): ?string
    {
        return $this->numcompte;
    }

    public function setNumcompte(string $numcompte): self
    {
        $this->numcompte = $numcompte;

        return $this;
    }

    public function getNumagence(): ?string
    {
        return $this->numagence;
    }

    public function setNumagence(string $numagence): self
    {
        $this->numagence = $numagence;

        return $this;
    }

    public function getNinea(): ?string
    {
        return $this->ninea;
    }

    public function setNinea(string $ninea): self
    {
        $this->ninea = $ninea;

        return $this;
    }

    public function getRaisonsocial(): ?string
    {
        return $this->raisonsocial;
    }

    public function setRaisonsocial(string $raisonsocial): self
    {
        $this->raisonsocial = $raisonsocial;

        return $this;
    }

    public function getDateOuv(): ?string
    {
        return $this->dateOuv;
    }

    public function setDateOuv(string $dateOuv): self
    {
        $this->dateOuv = $dateOuv;

        return $this;
    }

    public function getFraisouv(): ?string
    {
        return $this->fraisouv;
    }

    public function setFraisouv(?string $fraisouv): self
    {
        $this->fraisouv = $fraisouv;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }
}
