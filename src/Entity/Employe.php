<?php

namespace App\Entity;

use App\Repository\EmployeRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * @UniqueEntity(
 *     fields={"email"},
 *     message="I think you're already registered!"
 * )
 */
#[ORM\Entity(repositoryClass: EmployeRepository::class)]

class Employe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    

    private ?int $id = null;
    
    #[ORM\Column(length: 255)]
   
    private ?string $nom = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
   
    private ?string $salaire = null;

    #[ORM\Column]
    
    private ?\DateTimeImmutable $born_At = null;

    #[ORM\Column(length: 255)]
   /** 
      * @Assert\Email( 
         * message = "The email '{{ value }}' is not a valid email.", 
         * checkMX = true 
      * ) 
   */ 
    private ?string $email = null;
    
    

    #[ORM\ManyToOne(inversedBy: 'employe')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Departement $Departement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSalaire(): ?string
    {
        return $this->salaire;
    }

    public function setSalaire(string $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getBornAt(): ?\DateTimeImmutable
    {
        return $this->born_At;
    }

    public function setBornAt(\DateTimeImmutable $born_At): self
    {
        $this->born_At = $born_At;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDepartement(): ?Departement
    {
        return $this->Departement;
    }

    public function setDepartement(?Departement $Departement): self
    {
        $this->Departement = $Departement;

        return $this;
    }
}
