<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestRepository")
 */
class Test
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="json_array")
     */
    private $ret;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRet()
    {
        return $this->ret;
    }

    public function setRet($ret): self
    {
        $this->ret = $ret;

        return $this;
    }
}
