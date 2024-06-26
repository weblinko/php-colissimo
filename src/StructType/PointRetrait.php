<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PointRetrait StructType
 * @subpackage Structs
 */
class PointRetrait extends AbstractStructBase
{
    /**
     * The codePays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codePays;
    /**
     * The langue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $langue;
    /**
     * The libellePays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $libellePays;
    /**
     * The loanOfHandlingTool
     * @var bool
     */
    public $loanOfHandlingTool;
    /**
     * The parking
     * @var bool
     */
    public $parking;
    /**
     * The reseau
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reseau;
    /**
     * The accesPersonneMobiliteReduite
     * @var bool
     */
    public $accesPersonneMobiliteReduite;
    /**
     * The adresse1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adresse1;
    /**
     * The adresse2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adresse2;
    /**
     * The adresse3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adresse3;
    /**
     * The codePostal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codePostal;
    /**
     * The congesPartiel
     * @var bool
     */
    public $congesPartiel;
    /**
     * The congesTotal
     * @var bool
     */
    public $congesTotal;
    /**
     * The coordGeolocalisationLatitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $coordGeolocalisationLatitude;
    /**
     * The coordGeolocalisationLongitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $coordGeolocalisationLongitude;
    /**
     * The distanceEnMetre
     * @var int
     */
    public $distanceEnMetre;
    /**
     * The horairesOuvertureDimanche
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $horairesOuvertureDimanche;
    /**
     * The horairesOuvertureJeudi
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $horairesOuvertureJeudi;
    /**
     * The horairesOuvertureLundi
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $horairesOuvertureLundi;
    /**
     * The horairesOuvertureMardi
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $horairesOuvertureMardi;
    /**
     * The horairesOuvertureMercredi
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $horairesOuvertureMercredi;
    /**
     * The horairesOuvertureSamedi
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $horairesOuvertureSamedi;
    /**
     * The horairesOuvertureVendredi
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $horairesOuvertureVendredi;
    /**
     * The identifiant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identifiant;
    /**
     * The indiceDeLocalisation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $indiceDeLocalisation;
    /**
     * The listeConges
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Colissimo\StructType\Conges[]
     */
    public $listeConges;
    /**
     * The localite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $localite;
    /**
     * The nom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nom;
    /**
     * The periodeActiviteHoraireDeb
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $periodeActiviteHoraireDeb;
    /**
     * The periodeActiviteHoraireFin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $periodeActiviteHoraireFin;
    /**
     * The poidsMaxi
     * @var int
     */
    public $poidsMaxi;
    /**
     * The typeDePoint
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $typeDePoint;
    /**
     * Constructor method for PointRetrait
     * @uses PointRetrait::setCodePays()
     * @uses PointRetrait::setLangue()
     * @uses PointRetrait::setLibellePays()
     * @uses PointRetrait::setLoanOfHandlingTool()
     * @uses PointRetrait::setParking()
     * @uses PointRetrait::setReseau()
     * @uses PointRetrait::setAccesPersonneMobiliteReduite()
     * @uses PointRetrait::setAdresse1()
     * @uses PointRetrait::setAdresse2()
     * @uses PointRetrait::setAdresse3()
     * @uses PointRetrait::setCodePostal()
     * @uses PointRetrait::setCongesPartiel()
     * @uses PointRetrait::setCongesTotal()
     * @uses PointRetrait::setCoordGeolocalisationLatitude()
     * @uses PointRetrait::setCoordGeolocalisationLongitude()
     * @uses PointRetrait::setDistanceEnMetre()
     * @uses PointRetrait::setHorairesOuvertureDimanche()
     * @uses PointRetrait::setHorairesOuvertureJeudi()
     * @uses PointRetrait::setHorairesOuvertureLundi()
     * @uses PointRetrait::setHorairesOuvertureMardi()
     * @uses PointRetrait::setHorairesOuvertureMercredi()
     * @uses PointRetrait::setHorairesOuvertureSamedi()
     * @uses PointRetrait::setHorairesOuvertureVendredi()
     * @uses PointRetrait::setIdentifiant()
     * @uses PointRetrait::setIndiceDeLocalisation()
     * @uses PointRetrait::setListeConges()
     * @uses PointRetrait::setLocalite()
     * @uses PointRetrait::setNom()
     * @uses PointRetrait::setPeriodeActiviteHoraireDeb()
     * @uses PointRetrait::setPeriodeActiviteHoraireFin()
     * @uses PointRetrait::setPoidsMaxi()
     * @uses PointRetrait::setTypeDePoint()
     * @param string $codePays
     * @param string $langue
     * @param string $libellePays
     * @param bool $loanOfHandlingTool
     * @param bool $parking
     * @param string $reseau
     * @param bool $accesPersonneMobiliteReduite
     * @param string $adresse1
     * @param string $adresse2
     * @param string $adresse3
     * @param string $codePostal
     * @param bool $congesPartiel
     * @param bool $congesTotal
     * @param string $coordGeolocalisationLatitude
     * @param string $coordGeolocalisationLongitude
     * @param int $distanceEnMetre
     * @param string $horairesOuvertureDimanche
     * @param string $horairesOuvertureJeudi
     * @param string $horairesOuvertureLundi
     * @param string $horairesOuvertureMardi
     * @param string $horairesOuvertureMercredi
     * @param string $horairesOuvertureSamedi
     * @param string $horairesOuvertureVendredi
     * @param string $identifiant
     * @param string $indiceDeLocalisation
     * @param \Colissimo\StructType\Conges[] $listeConges
     * @param string $localite
     * @param string $nom
     * @param string $periodeActiviteHoraireDeb
     * @param string $periodeActiviteHoraireFin
     * @param int $poidsMaxi
     * @param string $typeDePoint
     */
    public function __construct($codePays = null, $langue = null, $libellePays = null, $loanOfHandlingTool = null, $parking = null, $reseau = null, $accesPersonneMobiliteReduite = null, $adresse1 = null, $adresse2 = null, $adresse3 = null, $codePostal = null, $congesPartiel = null, $congesTotal = null, $coordGeolocalisationLatitude = null, $coordGeolocalisationLongitude = null, $distanceEnMetre = null, $horairesOuvertureDimanche = null, $horairesOuvertureJeudi = null, $horairesOuvertureLundi = null, $horairesOuvertureMardi = null, $horairesOuvertureMercredi = null, $horairesOuvertureSamedi = null, $horairesOuvertureVendredi = null, $identifiant = null, $indiceDeLocalisation = null, array $listeConges = array(), $localite = null, $nom = null, $periodeActiviteHoraireDeb = null, $periodeActiviteHoraireFin = null, $poidsMaxi = null, $typeDePoint = null)
    {
        $this
            ->setCodePays($codePays)
            ->setLangue($langue)
            ->setLibellePays($libellePays)
            ->setLoanOfHandlingTool($loanOfHandlingTool)
            ->setParking($parking)
            ->setReseau($reseau)
            ->setAccesPersonneMobiliteReduite($accesPersonneMobiliteReduite)
            ->setAdresse1($adresse1)
            ->setAdresse2($adresse2)
            ->setAdresse3($adresse3)
            ->setCodePostal($codePostal)
            ->setCongesPartiel($congesPartiel)
            ->setCongesTotal($congesTotal)
            ->setCoordGeolocalisationLatitude($coordGeolocalisationLatitude)
            ->setCoordGeolocalisationLongitude($coordGeolocalisationLongitude)
            ->setDistanceEnMetre($distanceEnMetre)
            ->setHorairesOuvertureDimanche($horairesOuvertureDimanche)
            ->setHorairesOuvertureJeudi($horairesOuvertureJeudi)
            ->setHorairesOuvertureLundi($horairesOuvertureLundi)
            ->setHorairesOuvertureMardi($horairesOuvertureMardi)
            ->setHorairesOuvertureMercredi($horairesOuvertureMercredi)
            ->setHorairesOuvertureSamedi($horairesOuvertureSamedi)
            ->setHorairesOuvertureVendredi($horairesOuvertureVendredi)
            ->setIdentifiant($identifiant)
            ->setIndiceDeLocalisation($indiceDeLocalisation)
            ->setListeConges($listeConges)
            ->setLocalite($localite)
            ->setNom($nom)
            ->setPeriodeActiviteHoraireDeb($periodeActiviteHoraireDeb)
            ->setPeriodeActiviteHoraireFin($periodeActiviteHoraireFin)
            ->setPoidsMaxi($poidsMaxi)
            ->setTypeDePoint($typeDePoint);
    }
    /**
     * Get codePays value
     * @return string|null
     */
    public function getCodePays()
    {
        return $this->codePays;
    }
    /**
     * Set codePays value
     * @param string $codePays
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setCodePays($codePays = null)
    {
        // validation for constraint: string
        if (!is_null($codePays) && !is_string($codePays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePays, true), gettype($codePays)), __LINE__);
        }
        $this->codePays = $codePays;
        return $this;
    }
    /**
     * Get langue value
     * @return string|null
     */
    public function getLangue()
    {
        return $this->langue;
    }
    /**
     * Set langue value
     * @param string $langue
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setLangue($langue = null)
    {
        // validation for constraint: string
        if (!is_null($langue) && !is_string($langue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($langue, true), gettype($langue)), __LINE__);
        }
        $this->langue = $langue;
        return $this;
    }
    /**
     * Get libellePays value
     * @return string|null
     */
    public function getLibellePays()
    {
        return $this->libellePays;
    }
    /**
     * Set libellePays value
     * @param string $libellePays
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setLibellePays($libellePays = null)
    {
        // validation for constraint: string
        if (!is_null($libellePays) && !is_string($libellePays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libellePays, true), gettype($libellePays)), __LINE__);
        }
        $this->libellePays = $libellePays;
        return $this;
    }
    /**
     * Get loanOfHandlingTool value
     * @return bool|null
     */
    public function getLoanOfHandlingTool()
    {
        return $this->loanOfHandlingTool;
    }
    /**
     * Set loanOfHandlingTool value
     * @param bool $loanOfHandlingTool
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setLoanOfHandlingTool($loanOfHandlingTool = null)
    {
        // validation for constraint: boolean
        if (!is_null($loanOfHandlingTool) && !is_bool($loanOfHandlingTool)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($loanOfHandlingTool, true), gettype($loanOfHandlingTool)), __LINE__);
        }
        $this->loanOfHandlingTool = $loanOfHandlingTool;
        return $this;
    }
    /**
     * Get parking value
     * @return bool|null
     */
    public function getParking()
    {
        return $this->parking;
    }
    /**
     * Set parking value
     * @param bool $parking
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setParking($parking = null)
    {
        // validation for constraint: boolean
        if (!is_null($parking) && !is_bool($parking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($parking, true), gettype($parking)), __LINE__);
        }
        $this->parking = $parking;
        return $this;
    }
    /**
     * Get reseau value
     * @return string|null
     */
    public function getReseau()
    {
        return $this->reseau;
    }
    /**
     * Set reseau value
     * @param string $reseau
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setReseau($reseau = null)
    {
        // validation for constraint: string
        if (!is_null($reseau) && !is_string($reseau)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reseau, true), gettype($reseau)), __LINE__);
        }
        $this->reseau = $reseau;
        return $this;
    }
    /**
     * Get accesPersonneMobiliteReduite value
     * @return bool|null
     */
    public function getAccesPersonneMobiliteReduite()
    {
        return $this->accesPersonneMobiliteReduite;
    }
    /**
     * Set accesPersonneMobiliteReduite value
     * @param bool $accesPersonneMobiliteReduite
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setAccesPersonneMobiliteReduite($accesPersonneMobiliteReduite = null)
    {
        // validation for constraint: boolean
        if (!is_null($accesPersonneMobiliteReduite) && !is_bool($accesPersonneMobiliteReduite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($accesPersonneMobiliteReduite, true), gettype($accesPersonneMobiliteReduite)), __LINE__);
        }
        $this->accesPersonneMobiliteReduite = $accesPersonneMobiliteReduite;
        return $this;
    }
    /**
     * Get adresse1 value
     * @return string|null
     */
    public function getAdresse1()
    {
        return $this->adresse1;
    }
    /**
     * Set adresse1 value
     * @param string $adresse1
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setAdresse1($adresse1 = null)
    {
        // validation for constraint: string
        if (!is_null($adresse1) && !is_string($adresse1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse1, true), gettype($adresse1)), __LINE__);
        }
        $this->adresse1 = $adresse1;
        return $this;
    }
    /**
     * Get adresse2 value
     * @return string|null
     */
    public function getAdresse2()
    {
        return $this->adresse2;
    }
    /**
     * Set adresse2 value
     * @param string $adresse2
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setAdresse2($adresse2 = null)
    {
        // validation for constraint: string
        if (!is_null($adresse2) && !is_string($adresse2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse2, true), gettype($adresse2)), __LINE__);
        }
        $this->adresse2 = $adresse2;
        return $this;
    }
    /**
     * Get adresse3 value
     * @return string|null
     */
    public function getAdresse3()
    {
        return $this->adresse3;
    }
    /**
     * Set adresse3 value
     * @param string $adresse3
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setAdresse3($adresse3 = null)
    {
        // validation for constraint: string
        if (!is_null($adresse3) && !is_string($adresse3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse3, true), gettype($adresse3)), __LINE__);
        }
        $this->adresse3 = $adresse3;
        return $this;
    }
    /**
     * Get codePostal value
     * @return string|null
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }
    /**
     * Set codePostal value
     * @param string $codePostal
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setCodePostal($codePostal = null)
    {
        // validation for constraint: string
        if (!is_null($codePostal) && !is_string($codePostal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePostal, true), gettype($codePostal)), __LINE__);
        }
        $this->codePostal = $codePostal;
        return $this;
    }
    /**
     * Get congesPartiel value
     * @return bool|null
     */
    public function getCongesPartiel()
    {
        return $this->congesPartiel;
    }
    /**
     * Set congesPartiel value
     * @param bool $congesPartiel
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setCongesPartiel($congesPartiel = null)
    {
        // validation for constraint: boolean
        if (!is_null($congesPartiel) && !is_bool($congesPartiel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($congesPartiel, true), gettype($congesPartiel)), __LINE__);
        }
        $this->congesPartiel = $congesPartiel;
        return $this;
    }
    /**
     * Get congesTotal value
     * @return bool|null
     */
    public function getCongesTotal()
    {
        return $this->congesTotal;
    }
    /**
     * Set congesTotal value
     * @param bool $congesTotal
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setCongesTotal($congesTotal = null)
    {
        // validation for constraint: boolean
        if (!is_null($congesTotal) && !is_bool($congesTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($congesTotal, true), gettype($congesTotal)), __LINE__);
        }
        $this->congesTotal = $congesTotal;
        return $this;
    }
    /**
     * Get coordGeolocalisationLatitude value
     * @return string|null
     */
    public function getCoordGeolocalisationLatitude()
    {
        return $this->coordGeolocalisationLatitude;
    }
    /**
     * Set coordGeolocalisationLatitude value
     * @param string $coordGeolocalisationLatitude
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setCoordGeolocalisationLatitude($coordGeolocalisationLatitude = null)
    {
        // validation for constraint: string
        if (!is_null($coordGeolocalisationLatitude) && !is_string($coordGeolocalisationLatitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coordGeolocalisationLatitude, true), gettype($coordGeolocalisationLatitude)), __LINE__);
        }
        $this->coordGeolocalisationLatitude = $coordGeolocalisationLatitude;
        return $this;
    }
    /**
     * Get coordGeolocalisationLongitude value
     * @return string|null
     */
    public function getCoordGeolocalisationLongitude()
    {
        return $this->coordGeolocalisationLongitude;
    }
    /**
     * Set coordGeolocalisationLongitude value
     * @param string $coordGeolocalisationLongitude
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setCoordGeolocalisationLongitude($coordGeolocalisationLongitude = null)
    {
        // validation for constraint: string
        if (!is_null($coordGeolocalisationLongitude) && !is_string($coordGeolocalisationLongitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coordGeolocalisationLongitude, true), gettype($coordGeolocalisationLongitude)), __LINE__);
        }
        $this->coordGeolocalisationLongitude = $coordGeolocalisationLongitude;
        return $this;
    }
    /**
     * Get distanceEnMetre value
     * @return int|null
     */
    public function getDistanceEnMetre()
    {
        return $this->distanceEnMetre;
    }
    /**
     * Set distanceEnMetre value
     * @param int $distanceEnMetre
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setDistanceEnMetre($distanceEnMetre = null)
    {
        // validation for constraint: int
        if (!is_null($distanceEnMetre) && !(is_int($distanceEnMetre) || ctype_digit($distanceEnMetre))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($distanceEnMetre, true), gettype($distanceEnMetre)), __LINE__);
        }
        $this->distanceEnMetre = $distanceEnMetre;
        return $this;
    }
    /**
     * Get horairesOuvertureDimanche value
     * @return string|null
     */
    public function getHorairesOuvertureDimanche()
    {
        return $this->horairesOuvertureDimanche;
    }
    /**
     * Set horairesOuvertureDimanche value
     * @param string $horairesOuvertureDimanche
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setHorairesOuvertureDimanche($horairesOuvertureDimanche = null)
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureDimanche) && !is_string($horairesOuvertureDimanche)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesOuvertureDimanche, true), gettype($horairesOuvertureDimanche)), __LINE__);
        }
        $this->horairesOuvertureDimanche = $horairesOuvertureDimanche;
        return $this;
    }
    /**
     * Get horairesOuvertureJeudi value
     * @return string|null
     */
    public function getHorairesOuvertureJeudi()
    {
        return $this->horairesOuvertureJeudi;
    }
    /**
     * Set horairesOuvertureJeudi value
     * @param string $horairesOuvertureJeudi
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setHorairesOuvertureJeudi($horairesOuvertureJeudi = null)
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureJeudi) && !is_string($horairesOuvertureJeudi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesOuvertureJeudi, true), gettype($horairesOuvertureJeudi)), __LINE__);
        }
        $this->horairesOuvertureJeudi = $horairesOuvertureJeudi;
        return $this;
    }
    /**
     * Get horairesOuvertureLundi value
     * @return string|null
     */
    public function getHorairesOuvertureLundi()
    {
        return $this->horairesOuvertureLundi;
    }
    /**
     * Set horairesOuvertureLundi value
     * @param string $horairesOuvertureLundi
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setHorairesOuvertureLundi($horairesOuvertureLundi = null)
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureLundi) && !is_string($horairesOuvertureLundi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesOuvertureLundi, true), gettype($horairesOuvertureLundi)), __LINE__);
        }
        $this->horairesOuvertureLundi = $horairesOuvertureLundi;
        return $this;
    }
    /**
     * Get horairesOuvertureMardi value
     * @return string|null
     */
    public function getHorairesOuvertureMardi()
    {
        return $this->horairesOuvertureMardi;
    }
    /**
     * Set horairesOuvertureMardi value
     * @param string $horairesOuvertureMardi
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setHorairesOuvertureMardi($horairesOuvertureMardi = null)
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureMardi) && !is_string($horairesOuvertureMardi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesOuvertureMardi, true), gettype($horairesOuvertureMardi)), __LINE__);
        }
        $this->horairesOuvertureMardi = $horairesOuvertureMardi;
        return $this;
    }
    /**
     * Get horairesOuvertureMercredi value
     * @return string|null
     */
    public function getHorairesOuvertureMercredi()
    {
        return $this->horairesOuvertureMercredi;
    }
    /**
     * Set horairesOuvertureMercredi value
     * @param string $horairesOuvertureMercredi
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setHorairesOuvertureMercredi($horairesOuvertureMercredi = null)
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureMercredi) && !is_string($horairesOuvertureMercredi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesOuvertureMercredi, true), gettype($horairesOuvertureMercredi)), __LINE__);
        }
        $this->horairesOuvertureMercredi = $horairesOuvertureMercredi;
        return $this;
    }
    /**
     * Get horairesOuvertureSamedi value
     * @return string|null
     */
    public function getHorairesOuvertureSamedi()
    {
        return $this->horairesOuvertureSamedi;
    }
    /**
     * Set horairesOuvertureSamedi value
     * @param string $horairesOuvertureSamedi
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setHorairesOuvertureSamedi($horairesOuvertureSamedi = null)
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureSamedi) && !is_string($horairesOuvertureSamedi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesOuvertureSamedi, true), gettype($horairesOuvertureSamedi)), __LINE__);
        }
        $this->horairesOuvertureSamedi = $horairesOuvertureSamedi;
        return $this;
    }
    /**
     * Get horairesOuvertureVendredi value
     * @return string|null
     */
    public function getHorairesOuvertureVendredi()
    {
        return $this->horairesOuvertureVendredi;
    }
    /**
     * Set horairesOuvertureVendredi value
     * @param string $horairesOuvertureVendredi
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setHorairesOuvertureVendredi($horairesOuvertureVendredi = null)
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureVendredi) && !is_string($horairesOuvertureVendredi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesOuvertureVendredi, true), gettype($horairesOuvertureVendredi)), __LINE__);
        }
        $this->horairesOuvertureVendredi = $horairesOuvertureVendredi;
        return $this;
    }
    /**
     * Get identifiant value
     * @return string|null
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }
    /**
     * Set identifiant value
     * @param string $identifiant
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setIdentifiant($identifiant = null)
    {
        // validation for constraint: string
        if (!is_null($identifiant) && !is_string($identifiant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifiant, true), gettype($identifiant)), __LINE__);
        }
        $this->identifiant = $identifiant;
        return $this;
    }
    /**
     * Get indiceDeLocalisation value
     * @return string|null
     */
    public function getIndiceDeLocalisation()
    {
        return $this->indiceDeLocalisation;
    }
    /**
     * Set indiceDeLocalisation value
     * @param string $indiceDeLocalisation
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setIndiceDeLocalisation($indiceDeLocalisation = null)
    {
        // validation for constraint: string
        if (!is_null($indiceDeLocalisation) && !is_string($indiceDeLocalisation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($indiceDeLocalisation, true), gettype($indiceDeLocalisation)), __LINE__);
        }
        $this->indiceDeLocalisation = $indiceDeLocalisation;
        return $this;
    }
    /**
     * Get listeConges value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Colissimo\StructType\Conges[]|null
     */
    public function getListeConges()
    {
        return isset($this->listeConges) ? $this->listeConges : null;
    }
    /**
     * This method is responsible for validating the values passed to the setListeConges method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListeConges method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListeCongesForArrayConstraintsFromSetListeConges(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pointRetraitListeCongesItem) {
            // validation for constraint: itemType
            if (!$pointRetraitListeCongesItem instanceof \Colissimo\StructType\Conges) {
                $invalidValues[] = is_object($pointRetraitListeCongesItem) ? get_class($pointRetraitListeCongesItem) : sprintf('%s(%s)', gettype($pointRetraitListeCongesItem), var_export($pointRetraitListeCongesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listeConges property can only contain items of type \Colissimo\StructType\Conges, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set listeConges value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Colissimo\StructType\Conges[] $listeConges
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setListeConges(array $listeConges = array())
    {
        // validation for constraint: array
        if ('' !== ($listeCongesArrayErrorMessage = self::validateListeCongesForArrayConstraintsFromSetListeConges($listeConges))) {
            throw new \InvalidArgumentException($listeCongesArrayErrorMessage, __LINE__);
        }
        if (is_null($listeConges) || (is_array($listeConges) && empty($listeConges))) {
            unset($this->listeConges);
        } else {
            $this->listeConges = $listeConges;
        }
        return $this;
    }
    /**
     * Add item to listeConges value
     * @throws \InvalidArgumentException
     * @param \Colissimo\StructType\Conges $item
     * @return \Colissimo\StructType\PointRetrait
     */
    public function addToListeConges(\Colissimo\StructType\Conges $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Colissimo\StructType\Conges) {
            throw new \InvalidArgumentException(sprintf('The listeConges property can only contain items of type \Colissimo\StructType\Conges, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listeConges[] = $item;
        return $this;
    }
    /**
     * Get localite value
     * @return string|null
     */
    public function getLocalite()
    {
        return $this->localite;
    }
    /**
     * Set localite value
     * @param string $localite
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setLocalite($localite = null)
    {
        // validation for constraint: string
        if (!is_null($localite) && !is_string($localite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localite, true), gettype($localite)), __LINE__);
        }
        $this->localite = $localite;
        return $this;
    }
    /**
     * Get nom value
     * @return string|null
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set nom value
     * @param string $nom
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setNom($nom = null)
    {
        // validation for constraint: string
        if (!is_null($nom) && !is_string($nom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nom, true), gettype($nom)), __LINE__);
        }
        $this->nom = $nom;
        return $this;
    }
    /**
     * Get periodeActiviteHoraireDeb value
     * @return string|null
     */
    public function getPeriodeActiviteHoraireDeb()
    {
        return $this->periodeActiviteHoraireDeb;
    }
    /**
     * Set periodeActiviteHoraireDeb value
     * @param string $periodeActiviteHoraireDeb
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setPeriodeActiviteHoraireDeb($periodeActiviteHoraireDeb = null)
    {
        // validation for constraint: string
        if (!is_null($periodeActiviteHoraireDeb) && !is_string($periodeActiviteHoraireDeb)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodeActiviteHoraireDeb, true), gettype($periodeActiviteHoraireDeb)), __LINE__);
        }
        $this->periodeActiviteHoraireDeb = $periodeActiviteHoraireDeb;
        return $this;
    }
    /**
     * Get periodeActiviteHoraireFin value
     * @return string|null
     */
    public function getPeriodeActiviteHoraireFin()
    {
        return $this->periodeActiviteHoraireFin;
    }
    /**
     * Set periodeActiviteHoraireFin value
     * @param string $periodeActiviteHoraireFin
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setPeriodeActiviteHoraireFin($periodeActiviteHoraireFin = null)
    {
        // validation for constraint: string
        if (!is_null($periodeActiviteHoraireFin) && !is_string($periodeActiviteHoraireFin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodeActiviteHoraireFin, true), gettype($periodeActiviteHoraireFin)), __LINE__);
        }
        $this->periodeActiviteHoraireFin = $periodeActiviteHoraireFin;
        return $this;
    }
    /**
     * Get poidsMaxi value
     * @return int|null
     */
    public function getPoidsMaxi()
    {
        return $this->poidsMaxi;
    }
    /**
     * Set poidsMaxi value
     * @param int $poidsMaxi
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setPoidsMaxi($poidsMaxi = null)
    {
        // validation for constraint: int
        if (!is_null($poidsMaxi) && !(is_int($poidsMaxi) || ctype_digit($poidsMaxi))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($poidsMaxi, true), gettype($poidsMaxi)), __LINE__);
        }
        $this->poidsMaxi = $poidsMaxi;
        return $this;
    }
    /**
     * Get typeDePoint value
     * @return string|null
     */
    public function getTypeDePoint()
    {
        return $this->typeDePoint;
    }
    /**
     * Set typeDePoint value
     * @param string $typeDePoint
     * @return \Colissimo\StructType\PointRetrait
     */
    public function setTypeDePoint($typeDePoint = null)
    {
        // validation for constraint: string
        if (!is_null($typeDePoint) && !is_string($typeDePoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeDePoint, true), gettype($typeDePoint)), __LINE__);
        }
        $this->typeDePoint = $typeDePoint;
        return $this;
    }
}
