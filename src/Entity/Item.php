<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ItemRepository::class)
 */
class Item
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $item_type_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $input_datetime;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getItemTypeId(): ?string
    {
        return $this->item_type_id;
    }

    public function setItemTypeId(string $item_type_id): self
    {
        $this->item_type_id = $item_type_id;

        return $this;
    }

    public function getInputDatetime(): ?\DateTimeInterface
    {
        return $this->input_datetime;
    }

    public function setInputDatetime(\DateTimeInterface $input_datetime): self
    {
        $this->input_datetime = $input_datetime;

        return $this;
    }
}
