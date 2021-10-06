<?php

namespace App\Entity;

use App\Repository\NewsRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=NewsRepository::class)
 * @ApiResource(itemOperations={"get","delete","patch"},collectionOperations={"get","post"},normalizationContext={"groups"={"news"}})
 */
class News
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"news"})
     * @Assert\NotNull
     * @Assert\Type("string")
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @Groups({"news"})
     * @Assert\NotNull
     * @Assert\Type("string")
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"news"})
     * @Assert\NotNull
     * @Assert\Type("datetime")
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
