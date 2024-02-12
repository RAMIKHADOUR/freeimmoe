<?php

namespace App\Entity;

use App\Repository\MediasRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MediasRepository::class)]
class Medias
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::BINARY, nullable: true)]
    private $photo1 = null;

    #[ORM\Column(type: Types::BINARY, nullable: true)]
    private $photo2 = null;

    #[ORM\Column(type: Types::BINARY, nullable: true)]
    private $photo3 = null;

    #[ORM\Column(type: Types::BINARY, nullable: true)]
    private $photo4 = null;

    #[ORM\Column(type: Types::BINARY, nullable: true)]
    private $photo5 = null;

    #[ORM\Column(type: Types::BINARY, nullable: true)]
    private $video1 = null;

    #[ORM\Column(type: Types::BINARY, nullable: true)]
    private $video2 = null;

    #[ORM\Column(type: Types::BINARY, nullable: true)]
    private $video3 = null;

    #[ORM\Column(type: Types::BINARY, nullable: true)]
    private $video4 = null;

    #[ORM\Column(type: Types::BINARY, nullable: true)]
    private $video5 = null;

    #[ORM\Column(type: Types::BINARY, nullable: true)]
    private $virtuel1 = null;

    #[ORM\Column(type: Types::BINARY, nullable: true)]
    private $virtuel2 = null;

    #[ORM\Column(type: Types::BINARY, nullable: true)]
    private $property = null;

    #[ORM\ManyToOne(inversedBy: 'medias')]
    private ?Propertys $propertys = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhoto1()
    {
        return $this->photo1;
    }

    public function setPhoto1($photo1): static
    {
        $this->photo1 = $photo1;

        return $this;
    }

    public function getPhoto2()
    {
        return $this->photo2;
    }

    public function setPhoto2($photo2): static
    {
        $this->photo2 = $photo2;

        return $this;
    }

    public function getPhoto3()
    {
        return $this->photo3;
    }

    public function setPhoto3($photo3): static
    {
        $this->photo3 = $photo3;

        return $this;
    }

    public function getPhoto4()
    {
        return $this->photo4;
    }

    public function setPhoto4($photo4): static
    {
        $this->photo4 = $photo4;

        return $this;
    }

    public function getPhoto5()
    {
        return $this->photo5;
    }

    public function setPhoto5($photo5): static
    {
        $this->photo5 = $photo5;

        return $this;
    }

    public function getVideo1()
    {
        return $this->video1;
    }

    public function setVideo1($video1): static
    {
        $this->video1 = $video1;

        return $this;
    }

    public function getVideo2()
    {
        return $this->video2;
    }

    public function setVideo2($video2): static
    {
        $this->video2 = $video2;

        return $this;
    }

    public function getVideo3()
    {
        return $this->video3;
    }

    public function setVideo3($video3): static
    {
        $this->video3 = $video3;

        return $this;
    }

    public function getVideo4()
    {
        return $this->video4;
    }

    public function setVideo4($video4): static
    {
        $this->video4 = $video4;

        return $this;
    }

    public function getVideo5()
    {
        return $this->video5;
    }

    public function setVideo5($video5): static
    {
        $this->video5 = $video5;

        return $this;
    }

    public function getVirtuel1()
    {
        return $this->virtuel1;
    }

    public function setVirtuel1($virtuel1): static
    {
        $this->virtuel1 = $virtuel1;

        return $this;
    }

    public function getVirtuel2()
    {
        return $this->virtuel2;
    }

    public function setVirtuel2($virtuel2): static
    {
        $this->virtuel2 = $virtuel2;

        return $this;
    }

    public function getProperty()
    {
        return $this->property;
    }

    public function setProperty($property): static
    {
        $this->property = $property;

        return $this;
    }

    public function getPropertys(): ?Propertys
    {
        return $this->propertys;
    }

    public function setPropertys(?Propertys $propertys): static
    {
        $this->propertys = $propertys;

        return $this;
    }
}
