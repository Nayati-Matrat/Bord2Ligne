<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TestRepository::class)
 */
class Test
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
    private $Test1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Test2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTest1(): ?string
    {
        return $this->Test1;
    }

    public function setTest1(string $Test1): self
    {
        $this->Test1 = $Test1;

        return $this;
    }

    public function getTest2(): ?string
    {
        return $this->Test2;
    }

    public function setTest2(string $Test2): self
    {
        $this->Test2 = $Test2;

        return $this;
    }
}
