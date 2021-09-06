<?php

namespace App\Entity;

use App\Repository\RessourceRepository;
use App\Entity\Ressources;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RessourceRepository::class)
 */
class Ressource
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ressources")
     * @ORM\JoinColumn(name="ressourceType", referencedColumnName="id")
     */
    private Ressources $ressourceType;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity=Cantons::class, inversedBy="ressource")
     * @ORM\JoinColumn(nullable=false)
     */
    private $canton;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRessourceTypeId(): ?int
    {
        return $this->ressource_type_id;
    }

    public function setRessourceTypeId(int $ressourceType): self
    {
        $this->ressource_type_id = $ressourceType;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getCanton(): ?Cantons
    {
        return $this->canton;
    }

    public function setCanton(?Cantons $canton): self
    {
        $this->canton = $canton;

        return $this;
    }
}
