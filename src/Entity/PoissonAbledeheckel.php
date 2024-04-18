<?php

namespace App\Entity;

use App\Repository\PoissonAbledeheckelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PoissonAbledeheckelRepository::class)
 */
class PoissonAbledeheckel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nomscien;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Descipteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Anneedesc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Statutiucn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Famille;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Genre;

    /**
     * @ORM\Column(type="string", length=700)
     */
    private $Introduction;

    /**
     * @ORM\Column(type="string", length=700)
     */
    private $Legenre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Taillemoy;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Taillemax;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Mimetisme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Longevite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Motif;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Forme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Commentreconnaitre;

    /**
     * @ORM\Column(type="string", length=700)
     */
    private $DifferenceMetF;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Regime;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Sociabilite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Territorialite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Modedevie;

    /**
     * @ORM\Column(type="string", length=700)
     */
    private $Modeetcomportement;

    /**
     * @ORM\Column(type="string", length=700)
     */
    private $Modederepro;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Especemigra;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Polygamme;

    /**
     * @ORM\Column(type="string", length=700)
     */
    private $Especeinoffensive;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $Origine;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $Pays;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $Iles;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $Paysinvasif;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Bassins;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Rivieres;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Lac;

    /**
     * @ORM\Column(type="string", length=700)
     */
    private $Presencegeo;

    /**
     * @ORM\Column(type="string", length=700)
     */
    private $Etatdesstock;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Temperature;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Profondeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Phacidite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ghdurete;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Courant;

    /**
     * @ORM\Column(type="string", length=700)
     */
    private $Presentationbio;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getNomscien(): ?string
    {
        return $this->Nomscien;
    }

    public function setNomscien(string $Nomscien): self
    {
        $this->Nomscien = $Nomscien;

        return $this;
    }

    public function getDescipteur(): ?string
    {
        return $this->Descipteur;
    }

    public function setDescipteur(string $Descipteur): self
    {
        $this->Descipteur = $Descipteur;

        return $this;
    }

    public function getAnneedesc(): ?string
    {
        return $this->Anneedesc;
    }

    public function setAnneedesc(string $Anneedesc): self
    {
        $this->Anneedesc = $Anneedesc;

        return $this;
    }

    public function getStatutiucn(): ?string
    {
        return $this->Statutiucn;
    }

    public function setStatutiucn(string $Statutiucn): self
    {
        $this->Statutiucn = $Statutiucn;

        return $this;
    }

    public function getFamille(): ?string
    {
        return $this->Famille;
    }

    public function setFamille(string $Famille): self
    {
        $this->Famille = $Famille;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->Genre;
    }

    public function setGenre(string $Genre): self
    {
        $this->Genre = $Genre;

        return $this;
    }

    public function getIntroduction(): ?string
    {
        return $this->Introduction;
    }

    public function setIntroduction(string $Introduction): self
    {
        $this->Introduction = $Introduction;

        return $this;
    }

    public function getLegenre(): ?string
    {
        return $this->Legenre;
    }

    public function setLegenre(string $Legenre): self
    {
        $this->Legenre = $Legenre;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getTaillemoy(): ?string
    {
        return $this->Taillemoy;
    }

    public function setTaillemoy(string $Taillemoy): self
    {
        $this->Taillemoy = $Taillemoy;

        return $this;
    }

    public function getTaillemax(): ?string
    {
        return $this->Taillemax;
    }

    public function setTaillemax(string $Taillemax): self
    {
        $this->Taillemax = $Taillemax;

        return $this;
    }

    public function getMimetisme(): ?string
    {
        return $this->Mimetisme;
    }

    public function setMimetisme(string $Mimetisme): self
    {
        $this->Mimetisme = $Mimetisme;

        return $this;
    }

    public function getLongevite(): ?string
    {
        return $this->Longevite;
    }

    public function setLongevite(string $Longevite): self
    {
        $this->Longevite = $Longevite;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->Motif;
    }

    public function setMotif(string $Motif): self
    {
        $this->Motif = $Motif;

        return $this;
    }

    public function getForme(): ?string
    {
        return $this->Forme;
    }

    public function setForme(string $Forme): self
    {
        $this->Forme = $Forme;

        return $this;
    }

    public function getCommentreconnaitre(): ?string
    {
        return $this->Commentreconnaitre;
    }

    public function setCommentreconnaitre(string $Commentreconnaitre): self
    {
        $this->Commentreconnaitre = $Commentreconnaitre;

        return $this;
    }

    public function getDifferenceMetF(): ?string
    {
        return $this->DifferenceMetF;
    }

    public function setDifferenceMetF(string $DifferenceMetF): self
    {
        $this->DifferenceMetF = $DifferenceMetF;

        return $this;
    }

    public function getRegime(): ?string
    {
        return $this->Regime;
    }

    public function setRegime(string $Regime): self
    {
        $this->Regime = $Regime;

        return $this;
    }

    public function getSociabilite(): ?string
    {
        return $this->Sociabilite;
    }

    public function setSociabilite(string $Sociabilite): self
    {
        $this->Sociabilite = $Sociabilite;

        return $this;
    }

    public function getTerritorialite(): ?string
    {
        return $this->Territorialite;
    }

    public function setTerritorialite(string $Territorialite): self
    {
        $this->Territorialite = $Territorialite;

        return $this;
    }

    public function getModedevie(): ?string
    {
        return $this->Modedevie;
    }

    public function setModedevie(string $Modedevie): self
    {
        $this->Modedevie = $Modedevie;

        return $this;
    }

    public function getModeetcomportement(): ?string
    {
        return $this->Modeetcomportement;
    }

    public function setModeetcomportement(string $Modeetcomportement): self
    {
        $this->Modeetcomportement = $Modeetcomportement;

        return $this;
    }

    public function getModederepro(): ?string
    {
        return $this->Modederepro;
    }

    public function setModederepro(string $Modederepro): self
    {
        $this->Modederepro = $Modederepro;

        return $this;
    }

    public function getEspecemigra(): ?string
    {
        return $this->Especemigra;
    }

    public function setEspecemigra(string $Especemigra): self
    {
        $this->Especemigra = $Especemigra;

        return $this;
    }

    public function getPolygamme(): ?string
    {
        return $this->Polygamme;
    }

    public function setPolygamme(string $Polygamme): self
    {
        $this->Polygamme = $Polygamme;

        return $this;
    }

    public function getEspeceinoffensive(): ?string
    {
        return $this->Especeinoffensive;
    }

    public function setEspeceinoffensive(string $Especeinoffensive): self
    {
        $this->Especeinoffensive = $Especeinoffensive;

        return $this;
    }

    public function getOrigine(): ?string
    {
        return $this->Origine;
    }

    public function setOrigine(string $Origine): self
    {
        $this->Origine = $Origine;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->Pays;
    }

    public function setPays(string $Pays): self
    {
        $this->Pays = $Pays;

        return $this;
    }

    public function getIles(): ?string
    {
        return $this->Iles;
    }

    public function setIles(string $Iles): self
    {
        $this->Iles = $Iles;

        return $this;
    }

    public function getPaysinvasif(): ?string
    {
        return $this->Paysinvasif;
    }

    public function setPaysinvasif(string $Paysinvasif): self
    {
        $this->Paysinvasif = $Paysinvasif;

        return $this;
    }

    public function getBassins(): ?string
    {
        return $this->Bassins;
    }

    public function setBassins(string $Bassins): self
    {
        $this->Bassins = $Bassins;

        return $this;
    }

    public function getRivieres(): ?string
    {
        return $this->Rivieres;
    }

    public function setRivieres(string $Rivieres): self
    {
        $this->Rivieres = $Rivieres;

        return $this;
    }

    public function getLac(): ?string
    {
        return $this->Lac;
    }

    public function setLac(string $Lac): self
    {
        $this->Lac = $Lac;

        return $this;
    }

    public function getPresencegeo(): ?string
    {
        return $this->Presencegeo;
    }

    public function setPresencegeo(string $Presencegeo): self
    {
        $this->Presencegeo = $Presencegeo;

        return $this;
    }

    public function getEtatdesstock(): ?string
    {
        return $this->Etatdesstock;
    }

    public function setEtatdesstock(string $Etatdesstock): self
    {
        $this->Etatdesstock = $Etatdesstock;

        return $this;
    }

    public function getTemperature(): ?string
    {
        return $this->Temperature;
    }

    public function setTemperature(string $Temperature): self
    {
        $this->Temperature = $Temperature;

        return $this;
    }

    public function getProfondeur(): ?string
    {
        return $this->Profondeur;
    }

    public function setProfondeur(string $Profondeur): self
    {
        $this->Profondeur = $Profondeur;

        return $this;
    }

    public function getPhacidite(): ?string
    {
        return $this->Phacidite;
    }

    public function setPhacidite(string $Phacidite): self
    {
        $this->Phacidite = $Phacidite;

        return $this;
    }

    public function getGhdurete(): ?string
    {
        return $this->Ghdurete;
    }

    public function setGhdurete(string $Ghdurete): self
    {
        $this->Ghdurete = $Ghdurete;

        return $this;
    }

    public function getCourant(): ?string
    {
        return $this->Courant;
    }

    public function setCourant(string $Courant): self
    {
        $this->Courant = $Courant;

        return $this;
    }

    public function getPresentationbio(): ?string
    {
        return $this->Presentationbio;
    }

    public function setPresentationbio(string $Presentationbio): self
    {
        $this->Presentationbio = $Presentationbio;

        return $this;
    }
}
