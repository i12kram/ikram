<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonneRepository::class)]
class Personne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Nom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?int
    {
        return $this->Nom;
    }

    public function setNom(int $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }
}
