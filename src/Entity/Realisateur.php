<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Realisateur
 *
 * @ORM\Table(name="realisateur")
 * @ORM\Entity
 */
class Realisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_realisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRealisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_realisateur", type="string", length=50, nullable=false)
     */
    private $nomRealisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_realisateur", type="string", length=50, nullable=false)
     */
    private $prenomRealisateur;

    public function getIdRealisateur(): ?int
    {
        return $this->idRealisateur;
    }

    public function getNomRealisateur(): ?string
    {
        return $this->nomRealisateur;
    }

    public function setNomRealisateur(string $nomRealisateur): self
    {
        $this->nomRealisateur = $nomRealisateur;

        return $this;
    }

    public function getPrenomRealisateur(): ?string
    {
        return $this->prenomRealisateur;
    }

    public function setPrenomRealisateur(string $prenomRealisateur): self
    {
        $this->prenomRealisateur = $prenomRealisateur;

        return $this;
    }


}
