<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM; 

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity
 *
 */
class Country
{
    const CONTINENT_ASIA            = 'Asia';
    const CONTINENT_EUROPE          = 'Europe';
    const CONTINENT_NORTH_AMERICA   = 'North America';
    const CONTINENT_AFRICA          = 'Africa';
    const CONTINENT_OCEANIA         = 'Oceania';
    const CONTINENT_ANTARCTICA      = 'Antarctica';
    const CONTINENT_SOUTH_AMERICA   = 'South America';
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="capital", type="integer", length=11)
     *
     */
    private $capital;
    
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=3)
     * @ORM\Id
     *
     */
    private $code;
    
    /**
     * @var string
     *
     * @ORM\Column(name="code2", type="string", length=2)
     *
     */
    private $code2;
    
    /**
     * @var string
     *
     * @ORM\Column(name="continent", type="string")
     *
     */
    private $continent;
	
    /**
     * @var float
     *
     * @ORM\Column(name="GNP", type="float", length=10, precision=2)
     *
     */
    private $GNP;
	
    /**
     * @var float
     *
     * @ORM\Column(name="GNP_old", type="float", length=10, precision=2)
     *
     */
    private $GNPOld;
	
    /**
     * @var string
     *
     * @ORM\Column(name="government_form", type="string", length=45)
     *
     */
    private $governmentForm;
	
    /**
     * @var string
     *
     * @ORM\Column(name="head_of_state", type="string", length=60)
     *
     */
    private $headOfState;
	
    /**
     * @var smallint
     *
     * @ORM\Column(name="indep_year", type="smallint", length=6)
     *
     */
    private $indepYear;
	
    /**
     * @var float
     *
     * @ORM\Column(name="life_expectancy", type="float", length=3, precision=1)
     *
     */
    private $lifeExpectancy;
	
    /**
     * @var string
     *
     * @ORM\Column(name="local_name", type="string", length=45)
     *
     */
    private $localName;
	
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=52)
     *
     */
    private $name;
	
    /**
     * @var integer
     *
     * @ORM\Column(name="population", type="integer", length=11)
     *
     */
    private $population;
	
    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=26)
     *
     */
    private $region;
	
    /**
     * @var surfaceArea
     *
     * @ORM\Column(name="surface_area", type="float", length=10, precision=2)
     *
     */
    private $surfaceArea;
    
    /**
     * @ORM\ManyToOne(targetEntity="\Application\Entity\CountryLanguage", inversedBy="country")
     * @ORM\JoinColumn(name="code", referencedColumnName="country_code")
     */
    private $countryLanguage;
    
    public function __construct() 
    {
        $this->countryLanguage = new ArrayCollection();
    }
    
    
    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set name
     *
     * @param string $name
     *
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Get capital
     *
     * @return integer
     */
    public function getCapital()
    {
        return $this->capital;
    }
    
    /**
     * Set capital
     *
     * @param integer $capital
     *
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;
    }
    
    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * Set code
     *
     * @param string $code
     *
     */
    public function setCode($code)
    {
        $this->code = $code;
    }
    
    /**
     * Get code2
     *
     * @return string
     */
    public function getCode2()
    {
        return $this->code2;
    }
    
    /**
     * Set code2
     *
     * @param string $code2
     *
     */
    public function setCode2($code2)
    {
        $this->code2 = $code2;
    }
    
    /**
     * Get continent
     *
     * @return string
     */
    public function getContinent()
    {
        return $this->continent;
    }
      
    /**
     * Set continent
     *
     * @param string $continent
     *
     */
    public function setContinent($continent)
    {
        if (!in_array($continent, array(self::CONTINENT_AFRICA, self::CONTINENT_ANTARCTICA, self::CONTINENT_ASIA, self::CONTINENT_EUROPE,
                                        self::CONTINENT_NORTH_AMERICA, self::CONTINENT_OCEANIA, self::CONTINENT_SOUTH_AMERICA))) {
            throw new \InvalidArgumentException("Invalid continent value");
        }
        $this->continent = $continent;
    }
    
    /**
     * Get GNP
     *
     * @return float
     */
    public function getGNP()
    {
        return $this->GNP;
    }
    
    /**
     * Set GNP
     *
     * @param float $GNP
     *
     */
    public function setGNP($GNP)
    {
        $this->GNP = $GNP;
    }
    
    /**
     * Get GNPOld
     *
     * @return float
     */
    public function getGNPOld()
    {
        return $this->GNPOld;
    }
    
    /**
     * Set GNPOld
     *
     * @param float $GNPOld
     *
     */
    public function setGNPOld($GNPOld)
    {
        $this->GNPOld = $GNPOld;
    }
    
    /**
     * Get governmentForm
     *
     * @return string
     */
    public function getGovernmentForm()
    {
        return $this->governmentForm;
    }
    
    /**
     * Set governmentForm
     *
     * @param string $governmentForm
     *
     */
    public function setGovernmentForm($governmentForm)
    {
        $this->governmentForm = $governmentForm;
    }
    
    /**
     * Get headOfState
     *
     * @return string
     */
    public function getHeadOfState()
    {
        return $this->headOfState;
    }
    
    /**
     * Set headOfState
     *
     * @param string $headOfState
     *
     */
    public function setHeadOfState($headOfState)
    {
        $this->headOfState = $headOfState;
    }
    
    /**
     * Get indepYear
     *
     * @return integer
     */
    public function getIndepYear()
    {
        return $this->indepYear;
    }
    
    /**
     * Set indepYear
     *
     * @param integer $indepYear
     *
     */
    public function setIndepYear($indepYear)
    {
        $this->indepYear = $indepYear;
    }
    
    /**
     * Get lifeExpectancy
     *
     * @return float
     */
    public function getLifeExpectancy()
    {
        return $this->lifeExpectancy;
    }
    
    /**
     * Set lifeExpectancy
     *
     * @param float $lifeExpectancy
     *
     */
    public function setLifeExpectancy($lifeExpectancy)
    {
        $this->lifeExpectancy = $lifeExpectancy;
    }
    
    /**
     * Get localName
     *
     * @return string
     */
    public function getLocalName()
    {
        return $this->localName;
    }
    
    /**
     * Set localName
     *
     * @param string $localName
     *
     */
    public function setLocalName($localName)
    {
        $this->localName = $localName;
    }
    
    /**
     * Get population
     *
     * @return integer
     */
    public function getPopulation()
    {
        return $this->population;
    }
    
    /**
     * Set population
     *
     * @param integer $population
     *
     */
    public function setPopulation($population)
    {
        $this->population = $population;
    }
    
    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }
    
    /**
     * Set region
     *
     * @param string $region
     *
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }
    
    /**
     * Get surfaceArea
     *
     * @return float
     */
    public function getSurfaceArea()
    {
        return $this->surfaceArea;
    }
    
    /**
     * Set surfaceArea
     *
     * @param float $surfaceArea
     *
     */
    public function setSurfaceArea($surfaceArea)
    {
        $this->surfaceArea = $surfaceArea;
    }
    
    /**
     * Get countryLanguage
     *
     * @return string
     */
    public function getCountryLanguage()
    {
        return $this->countryLanguage->getLanguage();
    }
    
    /**
     * Set countryLanguage
     *
     * @param string $countryLanguage
     *
     */
    public function setCountryLanguage($countryLanguage)
    {
        $this->countryLanguage->setLanguage($countryLanguage);
    }    
}