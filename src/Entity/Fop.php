<?php

namespace App\Entity;

use App\Repository\FopRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FopRepository::class)]
class Fop
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $names = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNames(): ?string
    {
        return $this->names;
    }

    public function setNames(string $names): static
    {
        $this->names = $names;

        return $this;
    }
}
