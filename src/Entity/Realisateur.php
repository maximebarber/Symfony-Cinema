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


}
