<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film", indexes={@ORM\Index(name="FK_FILM_id_realisateur", columns={"id_realisateur"})})
 * @ORM\Entity
 */
class Film
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_film", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFilm;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_film", type="string", length=250, nullable=false)
     */
    private $titreFilm;

    /**
     * @var int
     *
     * @ORM\Column(name="annee_film", type="integer", nullable=false)
     */
    private $anneeFilm;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_film", type="integer", nullable=false)
     */
    private $dureeFilm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resume", type="text", length=65535, nullable=true)
     */
    private $resume;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_image", type="string", length=255, nullable=true)
     */
    private $urlImage;

    /**
     * @var float|null
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=true)
     */
    private $note;

    /**
     * @var \Realisateur
     *
     * @ORM\ManyToOne(targetEntity="Realisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_realisateur", referencedColumnName="id_realisateur")
     * })
     */
    private $idRealisateur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acteur", mappedBy="idFilm")
     */
    private $idActeur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Genre", inversedBy="idFilm")
     * @ORM\JoinTable(name="posseder",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_film", referencedColumnName="id_film")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_genre", referencedColumnName="id_genre")
     *   }
     * )
     */
    private $idGenre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idActeur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idGenre = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
