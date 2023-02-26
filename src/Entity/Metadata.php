<?php

namespace App\Entity;

use App\Repository\MetadataRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MetadataRepository::class)]
class Metadata
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'metadatas')]
    private ?User $User = null;

    #[ORM\ManyToOne(inversedBy: 'metadatas')]
    private ?Message $Message = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $readDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getMessage(): ?Message
    {
        return $this->Message;
    }

    public function setMessage(?Message $Message): self
    {
        $this->Message = $Message;

        return $this;
    }

    public function getReadDate(): ?\DateTimeInterface
    {
        return $this->readDate;
    }

    public function setReadDate(?\DateTimeInterface $readDate): self
    {
        $this->readDate = $readDate;

        return $this;
    }
}
