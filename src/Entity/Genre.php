<?php

namespace App\Entity;

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

}
