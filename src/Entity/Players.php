<?php

namespace App\Entity;

use App\Repository\PlayersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlayersRepository::class)
 */
class Players
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
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $color;

    /**
     * @ORM\OneToMany(targetEntity=Cantons::class, mappedBy="owner")
     */
    private $cantons;

    /**
     * @ORM\ManyToOne(targetEntity=Cantons::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $county;

    public function __construct()
    {
        $this->cantons = new ArrayCollection();
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return Collection|Cantons[]
     */
    public function getCantons(): Collection
    {
        return $this->cantons;
    }

    public function addCanton(Cantons $canton): self
    {
        if (!$this->cantons->contains($canton)) {
            $this->cantons[] = $canton;
            $canton->setOwner($this);
        }

        return $this;
    }

    public function removeCanton(Cantons $canton): self
    {
        if ($this->cantons->removeElement($canton)) {
            // set the owning side to null (unless already changed)
            if ($canton->getOwner() === $this) {
                $canton->setOwner(null);
            }
        }

        return $this;
    }

    public function getCounty(): ?Cantons
    {
        return $this->county;
    }

    public function setCounty(?Cantons $county): self
    {
        $this->county = $county;

        return $this;
    }
}
