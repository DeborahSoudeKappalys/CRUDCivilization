<?php

namespace App\Entity;

use App\Repository\CantonsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CantonsRepository::class)
 */
class Cantons
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
    private $name;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $blazon;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $description;


    /**
     * @ORM\ManyToOne(targetEntity=Players::class, inversedBy="cantons")
     */
    private $owner;

    /**
     * ArrayCollection
     */
    private ArrayCollection $neighbors;

    /**
     * @ORM\Column(type="integer")
     */
    private $power;

    public function __construct()
    {
        $this->ressources = new ArrayCollection();
        $this->neighbors = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBlazon(): ?string
    {
        return $this->blazon;
    }

    public function setBlazon(string $blazon): self
    {
        $this->blazon = $blazon;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getOwner(): ?Players
    {
        return $this->owner;
    }

    public function setOwner(?Players $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getNeighbors(): Collection
    {
        return $this->neighbors;
    }

    public function addNeighbor(self $neighbor): self
    {
        if (!$this->neighbors->contains($neighbor)) {
            $this->neighbors[] = $neighbor;
        }

        return $this;
    }

    public function removeNeighbor(self $neighbor): self
    {
        $this->neighbors->removeElement($neighbor);

        return $this;
    }

    public function getPower(): ?int
    {
        return $this->power;
    }

    public function setPower(int $power): self
    {
        $this->power = $power;

        return $this;
    }
}
