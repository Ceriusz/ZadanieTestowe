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
    
//    /**
//     * @var integer
//     *
//     * @ORM\Column(name="id", type="integer", nullable=false)
//     * @ORM\Id
//     * @ORM\GeneratedValue(strategy="IDENTITY")
//     */
//    private $id;
    
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
     * @ORM\OneToMany(targetEntity="\Application\Entity\City", mappedBy="country")
     * @ORM\JoinColumn(name="country_code", referencedColumnName="code")
     */
    private $city;
    
        
    /**
     * Get id
     *
     * @return integer
     */
//    public function getId()
//    {
//        return $this->id;
//    }
    
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
     * @return Country
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
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
     * @return Country
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;
        return $this;
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
     * @return Country
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
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
     * @return Country
     */
    public function setCode2($code2)
    {
        $this->code2 = $code2;
        return $this;
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
     * @return Country
     */
    public function setContinent($continent)
    {
        if (!in_array($continent, array(self::CONTINENT_AFRICA, self::CONTINENT_ANTARCTICA, self::CONTINENT_ASIA, self::CONTINENT_EUROPE,
                                        self::CONTINENT_NORTH_AMERICA, self::CONTINENT_OCEANIA, self::CONTINENT_SOUTH_AMERICA))) {
            throw new \InvalidArgumentException("Invalid continent value");
        }
        $this->continent = $continent;
        return $this;
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
     * @return Country
     */
    public function setGNP($GNP)
    {
        $this->GNP = $GNP;
        return $this;
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
     * @return Country
     */
    public function setGNPOld($GNPOld)
    {
        $this->GNPOld = $GNPOld;
        return $this;
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
     * @return Country
     */
    public function setGovernmentForm($governmentForm)
    {
        $this->governmentForm = $governmentForm;
        return $this;
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
     * @return Country
     */
    public function setHeadOfState($headOfState)
    {
        $this->headOfState = $headOfState;
        return $this;
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
     * @return Country
     */
    public function setIndepYear($indepYear)
    {
        $this->indepYear = $indepYear;
        return $this;
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
     * @return Country
     */
    public function setLifeExpectancy($lifeExpectancy)
    {
        $this->lifeExpectancy = $lifeExpectancy;
        return $this;
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
     * @return Country
     */
    public function setLocalName($localName)
    {
        $this->localName = $localName;
        return $this;
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
     * @return Country
     */
    public function setPopulation($population)
    {
        $this->population = $population;
        return $this;
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
     * @return Country
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
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
     * @return Country
     */
    public function setSurfaceArea($surfaceArea)
    {
        $this->surfaceArea = $surfaceArea;
        return $this;
    }
}