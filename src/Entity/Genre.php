<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 *
 * @ORM\Table(name="genre")
 * @ORM\Entity
 */
class Genre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_genre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGenre;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_genre", type="string", length=100, nullable=false)
     */
    private $nomGenre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Film", mappedBy="idGenre")
     */
    private $idFilm;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFilm = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdGenre(): ?int
    {
        return $this->idGenre;
    }

    public function getNomGenre(): ?string
    {
        return $this->nomGenre;
    }

    public function setNomGenre(string $nomGenre): self
    {
        $this->nomGenre = $nomGenre;

        return $this;
    }

    /**
     * @return Collection|Film[]
     */
    public function getIdFilm(): Collection
    {
        return $this->idFilm;
    }

    public function addIdFilm(Film $idFilm): self
    {
        if (!$this->idFilm->contains($idFilm)) {
            $this->idFilm[] = $idFilm;
            $idFilm->addIdGenre($this);
        }

        return $this;
    }

    public function removeIdFilm(Film $idFilm): self
    {
        if ($this->idFilm->contains($idFilm)) {
            $this->idFilm->removeElement($idFilm);
            $idFilm->removeIdGenre($this);
        }

        return $this;
    }

}
