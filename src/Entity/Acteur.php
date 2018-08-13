<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acteur
 *
 * @ORM\Table(name="acteur")
 * @ORM\Entity
 */
class Acteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_acteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActeur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_acteur", type="string", length=50, nullable=false)
     */
    private $nomActeur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_acteur", type="string", length=50, nullable=false)
     */
    private $prenomActeur;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe_acteur", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $sexeActeur;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_naissance_acteur", type="date", nullable=true)
     */
    private $dateNaissanceActeur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Film", inversedBy="idActeur")
     * @ORM\JoinTable(name="casting",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_acteur", referencedColumnName="id_acteur")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_film", referencedColumnName="id_film")
     *   }
     * )
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
