<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PoissonRepository::class)
 */
class Poisson
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $NOMSCIENTIFIQUE;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $DESCRIPTEUR;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $ANNEEDESCRIPTION;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $STATUTIUCN;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $FAMILLE;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $GENRE;

    /**
     * @ORM\Column(type="string", length=600)
     */
    private $INTRODUCTION;

    /**
     * @ORM\Column(type="string", length=700)
     */
    private $Legenre;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Type;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $TAILLEMOYENNE;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $TAILLEMAXIMALE;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $MIMETISME;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $LONGEVITE;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $MOTIF;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $FORME;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $COMMENTRECONNAITRELA;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DIFFERENCESENTREMALESETFEMELLES;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $REGIME;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $SOCIABILITE;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $TERRITORIALITE;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $RYTHMEBIO;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $MODEDEVIE;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $MODEDEVIEETCOMPORTEMENT;

    /**
     * @ORM\Column(type="string", length=550)
     */
    private $MODEDEREPRODUCTION;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $ESPECEMIGRATRICE;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $POLYGAMME;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $ESPECEINOFFENSIVE;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $Origine;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $Pays;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $Iles;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $Paysinvasif;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $Bassins;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $Rivieres;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $Lac;

    /**
     * @ORM\Column(type="string", length=600)
     */
    private $PRESENCEGEO;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $Etatdesstocketpechedurable;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $TEMPERATURE;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $Profondeur;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $PHACIDITE;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $GHDURETE;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $COURANT;

    /**
     * @ORM\Column(type="string", length=700)
     */
    private $PRESENTATIONDUBIOTOPE;

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

    public function getNOMSCIENTIFIQUE(): ?string
    {
        return $this->NOMSCIENTIFIQUE;
    }

    public function setNOMSCIENTIFIQUE(string $NOMSCIENTIFIQUE): self
    {
        $this->NOMSCIENTIFIQUE = $NOMSCIENTIFIQUE;

        return $this;
    }

    public function getDESCRIPTEUR(): ?string
    {
        return $this->DESCRIPTEUR;
    }

    public function setDESCRIPTEUR(string $DESCRIPTEUR): self
    {
        $this->DESCRIPTEUR = $DESCRIPTEUR;

        return $this;
    }

    public function getANNEEDESCRIPTION(): ?string
    {
        return $this->ANNEEDESCRIPTION;
    }

    public function setANNEEDESCRIPTION(string $ANNEEDESCRIPTION): self
    {
        $this->ANNEEDESCRIPTION = $ANNEEDESCRIPTION;

        return $this;
    }

    public function getSTATUTIUCN(): ?string
    {
        return $this->STATUTIUCN;
    }

    public function setSTATUTIUCN(string $STATUTIUCN): self
    {
        $this->STATUTIUCN = $STATUTIUCN;

        return $this;
    }

    public function getFAMILLE(): ?string
    {
        return $this->FAMILLE;
    }

    public function setFAMILLE(string $FAMILLE): self
    {
        $this->FAMILLE = $FAMILLE;

        return $this;
    }

    public function getGENRE(): ?string
    {
        return $this->GENRE;
    }

    public function setGENRE(string $GENRE): self
    {
        $this->GENRE = $GENRE;

        return $this;
    }

    public function getINTRODUCTION(): ?string
    {
        return $this->INTRODUCTION;
    }

    public function setINTRODUCTION(string $INTRODUCTION): self
    {
        $this->INTRODUCTION = $INTRODUCTION;

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

    public function getTAILLEMOYENNE(): ?string
    {
        return $this->TAILLEMOYENNE;
    }

    public function setTAILLEMOYENNE(string $TAILLEMOYENNE): self
    {
        $this->TAILLEMOYENNE = $TAILLEMOYENNE;

        return $this;
    }

    public function getTAILLEMAXIMALE(): ?string
    {
        return $this->TAILLEMAXIMALE;
    }

    public function setTAILLEMAXIMALE(string $TAILLEMAXIMALE): self
    {
        $this->TAILLEMAXIMALE = $TAILLEMAXIMALE;

        return $this;
    }

    public function getMIMETISME(): ?string
    {
        return $this->MIMETISME;
    }

    public function setMIMETISME(string $MIMETISME): self
    {
        $this->MIMETISME = $MIMETISME;

        return $this;
    }

    public function getLONGEVITE(): ?string
    {
        return $this->LONGEVITE;
    }

    public function setLONGEVITE(string $LONGEVITE): self
    {
        $this->LONGEVITE = $LONGEVITE;

        return $this;
    }

    public function getMOTIF(): ?string
    {
        return $this->MOTIF;
    }

    public function setMOTIF(string $MOTIF): self
    {
        $this->MOTIF = $MOTIF;

        return $this;
    }

    public function getFORME(): ?string
    {
        return $this->FORME;
    }

    public function setFORME(string $FORME): self
    {
        $this->FORME = $FORME;

        return $this;
    }

    public function getCOMMENTRECONNAITRELA(): ?string
    {
        return $this->COMMENTRECONNAITRELA;
    }

    public function setCOMMENTRECONNAITRELA(string $COMMENTRECONNAITRELA): self
    {
        $this->COMMENTRECONNAITRELA = $COMMENTRECONNAITRELA;

        return $this;
    }

    public function getDIFFERENCESENTREMALESETFEMELLES(): ?string
    {
        return $this->DIFFERENCESENTREMALESETFEMELLES;
    }

    public function setDIFFERENCESENTREMALESETFEMELLES(string $DIFFERENCESENTREMALESETFEMELLES): self
    {
        $this->DIFFERENCESENTREMALESETFEMELLES = $DIFFERENCESENTREMALESETFEMELLES;

        return $this;
    }

    public function getREGIME(): ?string
    {
        return $this->REGIME;
    }

    public function setREGIME(string $REGIME): self
    {
        $this->REGIME = $REGIME;

        return $this;
    }

    public function getSOCIABILITE(): ?string
    {
        return $this->SOCIABILITE;
    }

    public function setSOCIABILITE(string $SOCIABILITE): self
    {
        $this->SOCIABILITE = $SOCIABILITE;

        return $this;
    }

    public function getTERRITORIALITE(): ?string
    {
        return $this->TERRITORIALITE;
    }

    public function setTERRITORIALITE(string $TERRITORIALITE): self
    {
        $this->TERRITORIALITE = $TERRITORIALITE;

        return $this;
    }

    public function getRYTHMEBIO(): ?string
    {
        return $this->RYTHMEBIO;
    }

    public function setRYTHMEBIO(string $RYTHMEBIO): self
    {
        $this->RYTHMEBIO = $RYTHMEBIO;

        return $this;
    }

    public function getMODEDEVIE(): ?string
    {
        return $this->MODEDEVIE;
    }

    public function setMODEDEVIE(string $MODEDEVIE): self
    {
        $this->MODEDEVIE = $MODEDEVIE;

        return $this;
    }

    public function getMODEDEVIEETCOMPORTEMENT(): ?string
    {
        return $this->MODEDEVIEETCOMPORTEMENT;
    }

    public function setMODEDEVIEETCOMPORTEMENT(string $MODEDEVIEETCOMPORTEMENT): self
    {
        $this->MODEDEVIEETCOMPORTEMENT = $MODEDEVIEETCOMPORTEMENT;

        return $this;
    }

    public function getMODEDEREPRODUCTION(): ?string
    {
        return $this->MODEDEREPRODUCTION;
    }

    public function setMODEDEREPRODUCTION(string $MODEDEREPRODUCTION): self
    {
        $this->MODEDEREPRODUCTION = $MODEDEREPRODUCTION;

        return $this;
    }

    public function getESPECEMIGRATRICE(): ?string
    {
        return $this->ESPECEMIGRATRICE;
    }

    public function setESPECEMIGRATRICE(string $ESPECEMIGRATRICE): self
    {
        $this->ESPECEMIGRATRICE = $ESPECEMIGRATRICE;

        return $this;
    }

    public function getPOLYGAMME(): ?string
    {
        return $this->POLYGAMME;
    }

    public function setPOLYGAMME(string $POLYGAMME): self
    {
        $this->POLYGAMME = $POLYGAMME;

        return $this;
    }

    public function getESPECEINOFFENSIVE(): ?string
    {
        return $this->ESPECEINOFFENSIVE;
    }

    public function setESPECEINOFFENSIVE(string $ESPECEINOFFENSIVE): self
    {
        $this->ESPECEINOFFENSIVE = $ESPECEINOFFENSIVE;

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

    public function getPRESENCEGEO(): ?string
    {
        return $this->PRESENCEGEO;
    }

    public function setPRESENCEGEO(string $PRESENCEGEO): self
    {
        $this->PRESENCEGEO = $PRESENCEGEO;

        return $this;
    }

    public function getEtatdesstocketpechedurable(): ?string
    {
        return $this->Etatdesstocketpechedurable;
    }

    public function setEtatdesstocketpechedurable(string $Etatdesstocketpechedurable): self
    {
        $this->Etatdesstocketpechedurable = $Etatdesstocketpechedurable;

        return $this;
    }

    public function getTEMPERATURE(): ?string
    {
        return $this->TEMPERATURE;
    }

    public function setTEMPERATURE(string $TEMPERATURE): self
    {
        $this->TEMPERATURE = $TEMPERATURE;

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

    public function getPHACIDITE(): ?string
    {
        return $this->PHACIDITE;
    }

    public function setPHACIDITE(string $PHACIDITE): self
    {
        $this->PHACIDITE = $PHACIDITE;

        return $this;
    }

    public function getGHDURETE(): ?string
    {
        return $this->GHDURETE;
    }

    public function setGHDURETE(string $GHDURETE): self
    {
        $this->GHDURETE = $GHDURETE;

        return $this;
    }

    public function getCOURANT(): ?string
    {
        return $this->COURANT;
    }

    public function setCOURANT(string $COURANT): self
    {
        $this->COURANT = $COURANT;

        return $this;
    }

    public function getPRESENTATIONDUBIOTOPE(): ?string
    {
        return $this->PRESENTATIONDUBIOTOPE;
    }

    public function setPRESENTATIONDUBIOTOPE(string $PRESENTATIONDUBIOTOPE): self
    {
        $this->PRESENTATIONDUBIOTOPE = $PRESENTATIONDUBIOTOPE;

        return $this;
    }
}
