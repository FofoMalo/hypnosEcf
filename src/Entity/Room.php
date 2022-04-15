<?php

namespace App\Entity;

use App\Repository\RoomRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoomRepository::class)]
class Room
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $room_name;

    #[ORM\ManyToOne(targetEntity: Hotel::class, inversedBy: 'rooms')]
    private $hotel_name;

    #[ORM\Column(type: 'date', nullable: true)]
    private $created_at;

    #[ORM\Column(type: 'date', nullable: true)]
    private $update_at;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $status;

    #[ORM\Column(type: 'decimal', precision: 2, scale: '0', nullable: true)]
    private $price;

    #[ORM\Column(type: 'decimal', precision: 6, scale: 2, nullable: true)]
    private $Room_Price;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $image;

    #[ORM\Column(type: 'text', nullable: true)]
    private $details;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoomName(): ?string
    {
        return $this->room_name;
    }

    public function setRoomName(?string $room_name): self
    {
        $this->room_name = $room_name;

        return $this;
    }

    public function getHotelName(): ?Hotel
    {
        return $this->hotel_name;
    }

    public function setHotelName(?Hotel $hotel_name): self
    {
        $this->hotel_name = $hotel_name;

        return $this;
    }


    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->update_at;
    }

    public function setUpdateAt(?\DateTimeInterface $update_at): self
    {
        $this->update_at = $update_at;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getRoomPrice(): ?string
    {
        return $this->Room_Price;
    }

    public function setRoomPrice(?string $Room_Price): self
    {
        $this->Room_Price = $Room_Price;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(?string $details): self
    {
        $this->details = $details;

        return $this;
    }
    
    
}
