<?php

namespace App\Entity;

use App\Repository\NewCrossStudentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NewCrossStudentRepository::class)]
class NewCrossStudent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $country = null;

    #[ORM\Column(length: 40)]
    private ?string $total_brain_cells = null;

    #[ORM\Column(length: 50)]
    private ?string $average_mark = null;

    #[ORM\Column(length: 50)]
    private ?string $annual_mortgage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getTotalBrainCells(): ?string
    {
        return $this->total_brain_cells;
    }

    public function setTotalBrainCells(string $total_brain_cells): static
    {
        $this->total_brain_cells = $total_brain_cells;

        return $this;
    }

    public function getAverageMark(): ?string
    {
        return $this->average_mark;
    }

    public function setAverageMark(string $average_mark): static
    {
        $this->average_mark = $average_mark;

        return $this;
    }

    public function getAnnualMortgage(): ?string
    {
        return $this->annual_mortgage;
    }

    public function setAnnualMortgage(string $annual_mortgage): static
    {
        $this->annual_mortgage = $annual_mortgage;

        return $this;
    }
}
