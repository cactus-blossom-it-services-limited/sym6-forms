<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

// Note this is a plain-old-PHP-object not a doctrine entity
class Task
{
    protected string $task;

    protected ?\DateTimeInterface $dueDate;

    // Add choice constraint
    #[Assert\Choice(['household', 'shopping', 'languages'])]
    protected string $Category;

    public function getTask(): string
    {
        return $this->task;
    }

    public function setTask(string $task): void
    {
        $this->task = $task;
    }

    public function getDueDate(): ?\DateTimeInterface
    {
        return $this->dueDate;
    }

    public function setDueDate(?\DateTimeInterface $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    public function getCategory(): ?string
    {
        return $this->Category;
    }

    public function setCategory(string $Category): static
    {
        $this->Category = $Category;

        return $this;
    }

}