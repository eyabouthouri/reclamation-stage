<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity
 */
class Admin
{
    /**
     * @var int
     *
     * @ORM\Column(name="ida", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ida;

    /**
     * @var string
     *
     * @ORM\Column(name="noma", type="string", length=30, nullable=false)
     */
    private $noma;

    /**
     * @var string
     *
     * @ORM\Column(name="prenoma", type="string", length=30, nullable=false)
     */
    private $prenoma;

    /**
     * @var string
     *
     * @ORM\Column(name="maila", type="string", length=30, nullable=false)
     */
    private $maila;

    /**
     * @var string
     *
     * @ORM\Column(name="mdpa", type="string", length=30, nullable=false)
     */
    private $mdpa;

    public function getIda(): ?int
    {
        return $this->ida;
    }

    public function getNoma(): ?string
    {
        return $this->noma;
    }

    public function setNoma(string $noma): self
    {
        $this->noma = $noma;

        return $this;
    }

    public function getPrenoma(): ?string
    {
        return $this->prenoma;
    }

    public function setPrenoma(string $prenoma): self
    {
        $this->prenoma = $prenoma;

        return $this;
    }

    public function getMaila(): ?string
    {
        return $this->maila;
    }

    public function setMaila(string $maila): self
    {
        $this->maila = $maila;

        return $this;
    }

    public function getMdpa(): ?string
    {
        return $this->mdpa;
    }

    public function setMdpa(string $mdpa): self
    {
        $this->mdpa = $mdpa;

        return $this;
    }


}
