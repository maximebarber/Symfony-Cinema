<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    public function getIdFilm(): ?int
    {
        return $this->idFilm;
    }

    public function getTitreFilm(): ?string
    {
        return $this->titreFilm;
    }

    public function setTitreFilm(string $titreFilm): self
    {
        $this->titreFilm = $titreFilm;

        return $this;
    }

    public function getAnneeFilm(): ?int
    {
        return $this->anneeFilm;
    }

    public function setAnneeFilm(int $anneeFilm): self
    {
        $this->anneeFilm = $anneeFilm;

        return $this;
    }

    public function getDureeFilm(): ?int
    {
        return $this->dureeFilm;
    }

    public function setDureeFilm(int $dureeFilm): self
    {
        $this->dureeFilm = $dureeFilm;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(?string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getUrlImage(): ?string
    {
        return $this->urlImage;
    }

    public function setUrlImage(?string $urlImage): self
    {
        $this->urlImage = $urlImage;

        return $this;
    }

    public function getNote(): ?float
    {
        return $this->note;
    }

    public function setNote(?float $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getIdRealisateur(): ?Realisateur
    {
        return $this->idRealisateur;
    }

    public function setIdRealisateur(?Realisateur $idRealisateur): self
    {
        $this->idRealisateur = $idRealisateur;

        return $this;
    }

    /**
     * @return Collection|Acteur[]
     */
    public function getIdActeur(): Collection
    {
        return $this->idActeur;
    }

    public function addIdActeur(Acteur $idActeur): self
    {
        if (!$this->idActeur->contains($idActeur)) {
            $this->idActeur[] = $idActeur;
            $idActeur->addIdFilm($this);
        }

        return $this;
    }

    public function removeIdActeur(Acteur $idActeur): self
    {
        if ($this->idActeur->contains($idActeur)) {
            $this->idActeur->removeElement($idActeur);
            $idActeur->removeIdFilm($this);
        }

        return $this;
    }

    /**
     * @return Collection|Genre[]
     */
    public function getIdGenre(): Collection
    {
        return $this->idGenre;
    }

    public function addIdGenre(Genre $idGenre): self
    {
        if (!$this->idGenre->contains($idGenre)) {
            $this->idGenre[] = $idGenre;
        }

        return $this;
    }

    public function removeIdGenre(Genre $idGenre): self
    {
        if ($this->idGenre->contains($idGenre)) {
            $this->idGenre->removeElement($idGenre);
        }

        return $this;
    }

}
