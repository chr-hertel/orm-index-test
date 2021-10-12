<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Product
{
    #[ORM\Column(type: 'integer'), ORM\Id, ORM\GeneratedValue(strategy: 'AUTO')]
    private int $id;

    public function __construct(
        #[ORM\Column]
        private string $name,
        #[ORM\ManyToOne(targetEntity: Category::class)]
        private Category $category,
        #[ORM\Column(type: 'text', nullable: true)]
        private ?string $description
    ) {}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}
