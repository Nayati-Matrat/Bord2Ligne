<?php

namespace App\Entity;

use App\Repository\PoissonAbledeheckelRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PoissonAbledeheckelRepository::class)]
class PoissonAbledeheckel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Nom;

    #[ORM\Column(type: 'string', length: 255)]
    private $Nomscientifique;

    #[ORM\Column(type: 'string', length: 255)]
    private $Descripteur;

    #[ORM\Column(type: 'string', length: 255)]
    private $Anneedescription;

    #[ORM\Column(type: 'string', length: 255)]
    private $StatutIUCN;

    #[ORM\Column(type: 'string', length: 255)]
    private $Famille;

    #[ORM\Column(type: 'string', length: 255)]
    private $Genre;

    #[ORM\Column(type: 'string', length: 255)]
    private $Introduction;

    #[ORM\Column(type: 'string', length: 255)]
    private $Taillemoyenne;

    #[ORM\Column(type: 'string', length: 255)]
    private $Taillemax;

    #[ORM\Column(type: 'string', length: 255)]
    private $Longevite;

    #[ORM\Column(type: 'string', length: 255)]
    private $Forme;

    #[ORM\Column(type: 'string', length: 255)]
    private $Comment_reconnaitre_la;

    #[ORM\Column(type: 'string', length: 255)]
    private $Regime;

    #[ORM\Column(type: 'string', length: 255)]
    private $Sociabilite;

    #[ORM\Column(type: 'string', length: 255)]
    private $Territorialite;

    #[ORM\Column(type: 'string', length: 255)]
    private $Modedevie;

    #[ORM\Column(type: 'string', length: 255)]
    private $Modedevieetcomportement;

    #[ORM\Column(type: 'string', length: 255)]
    private $Modedereproduction;

    #[ORM\Column(type: 'string', length: 255)]
    private $Especemigratrice;

    #[ORM\Column(type: 'string', length: 255)]
    private $Especeinnofensive;

    #[ORM\Column(type: 'string', length: 500)]
    private $Origine;

    #[ORM\Column(type: 'string', length: 500)]
    private $Pays;

    #[ORM\Column(type: 'string', length: 255)]
    private $Bassins;

    #[ORM\Column(type: 'string', length: 255)]
    private $Rivieres;

    #[ORM\Column(type: 'string', length: 500)]
    private $Presencegeographiqueetetatdespopulations;

    #[ORM\Column(type: 'string', length: 255)]
    private $Temperature;

    #[ORM\Column(type: 'string', length: 255)]
    private $Phacidite;

    #[ORM\Column(type: 'string', length: 255)]
    private $Ghdurete;

    #[ORM\Column(type: 'string', length: 255)]
    private $Courant;

    #[ORM\Column(type: 'string', length: 500)]
    private $Presencedubiotope;

    #[ORM\Column(type: 'string', length: 255)]
    private $Type;

    #[ORM\Column(type: 'string', length: 700)]
    private $Legenre;

    #[ORM\Column(type: 'string', length: 255)]
    private $Mimetisme;

    #[ORM\Column(type: 'string', length: 255)]
    private $Motif;

    #[ORM\Column(type: 'string', length: 255)]
    private $Polygamme;

    #[ORM\Column(type: 'string', length: 255)]
    private $Iles;

    #[ORM\Column(type: 'string', length: 255)]
    private $Paysinvasif;

    #[ORM\Column(type: 'string', length: 255)]
    private $Lac;

    #[ORM\Column(type: 'string', length: 255)]
    private $Profondeur;

    #[ORM\Column(type: 'string', length: 300)]
    private $Etatdesstocksetpechesdurable;

    #[ORM\Column(type: 'string', length: 255)]
    private $Differenceentremaleetfemelle;

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

    public function getNomscientifique(): ?string
    {
        return $this->Nomscientifique;
    }

    public function setNomscientifique(string $Nomscientifique): self
    {
        $this->Nomscientifique = $Nomscientifique;

        return $this;
    }

    public function getDescripteur(): ?string
    {
        return $this->Descripteur;
    }

    public function setDescripteur(string $Descripteur): self
    {
        $this->Descripteur = $Descripteur;

        return $this;
    }

    public function getAnneedescription(): ?string
    {
        return $this->Anneedescription;
    }

    public function setAnneedescription(string $Anneedescription): self
    {
        $this->Anneedescription = $Anneedescription;

        return $this;
    }

    public function getStatutIUCN(): ?string
    {
        return $this->StatutIUCN;
    }

    public function setStatutIUCN(string $StatutIUCN): self
    {
        $this->StatutIUCN = $StatutIUCN;

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

    public function getTaillemoyenne(): ?string
    {
        return $this->Taillemoyenne;
    }

    public function setTaillemoyenne(string $Taillemoyenne): self
    {
        $this->Taillemoyenne = $Taillemoyenne;

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

    public function getLongevite(): ?string
    {
        return $this->Longevite;
    }

    public function setLongevite(string $Longevite): self
    {
        $this->Longevite = $Longevite;

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

    public function getCommentReconnaitreLa(): ?string
    {
        return $this->Comment_reconnaitre_la;
    }

    public function setCommentReconnaitreLa(string $Comment_reconnaitre_la): self
    {
        $this->Comment_reconnaitre_la = $Comment_reconnaitre_la;

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

    public function getModedevieetcomportement(): ?string
    {
        return $this->Modedevieetcomportement;
    }

    public function setModedevieetcomportement(string $Modedevieetcomportement): self
    {
        $this->Modedevieetcomportement = $Modedevieetcomportement;

        return $this;
    }

    public function getModedereproduction(): ?string
    {
        return $this->Modedereproduction;
    }

    public function setModedereproduction(string $Modedereproduction): self
    {
        $this->Modedereproduction = $Modedereproduction;

        return $this;
    }

    public function getEspecemigratrice(): ?string
    {
        return $this->Especemigratrice;
    }

    public function setEspecemigratrice(string $Especemigratrice): self
    {
        $this->Especemigratrice = $Especemigratrice;

        return $this;
    }

    public function getEspeceinnofensive(): ?string
    {
        return $this->Especeinnofensive;
    }

    public function setEspeceinnofensive(string $Especeinnofensive): self
    {
        $this->Especeinnofensive = $Especeinnofensive;

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

    public function getPresencegeographiqueetetatdespopulations(): ?string
    {
        return $this->Presencegeographiqueetetatdespopulations;
    }

    public function setPresencegeographiqueetetatdespopulations(string $Presencegeographiqueetetatdespopulations): self
    {
        $this->Presencegeographiqueetetatdespopulations = $Presencegeographiqueetetatdespopulations;

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

    public function getPresencedubiotope(): ?string
    {
        return $this->Presencedubiotope;
    }

    public function setPresencedubiotope(string $Presencedubiotope): self
    {
        $this->Presencedubiotope = $Presencedubiotope;

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

    public function getLegenre(): ?string
    {
        return $this->Legenre;
    }

    public function setLegenre(string $Legenre): self
    {
        $this->Legenre = $Legenre;

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

    public function getMotif(): ?string
    {
        return $this->Motif;
    }

    public function setMotif(string $Motif): self
    {
        $this->Motif = $Motif;

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

    public function getLac(): ?string
    {
        return $this->Lac;
    }

    public function setLac(string $Lac): self
    {
        $this->Lac = $Lac;

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

    public function getEtatdesstocksetpechesdurable(): ?string
    {
        return $this->Etatdesstocksetpechesdurable;
    }

    public function setEtatdesstocksetpechesdurable(string $Etatdesstocksetpechesdurable): self
    {
        $this->Etatdesstocksetpechesdurable = $Etatdesstocksetpechesdurable;

        return $this;
    }

    public function getDifferenceentremaleetfemelle(): ?string
    {
        return $this->Differenceentremaleetfemelle;
    }

    public function setDifferenceentremaleetfemelle(string $Differenceentremaleetfemelle): self
    {
        $this->Differenceentremaleetfemelle = $Differenceentremaleetfemelle;

        return $this;
    }
}
