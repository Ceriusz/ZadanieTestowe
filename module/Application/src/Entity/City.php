<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Entity\Country;
use Application\Entity\CountryLanguage;

/**
 * City
 *
 * @ORM\Table(name="city")
 * @ORM\Entity(repositoryClass="\Application\Repository\CityRepository")
 *
 */
class City
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=3)
     *
     */
    private $countryCode;
    
    /**
     * @var string
     *
     * @ORM\Column(name="district", type="string", length=20)
     *
     */
    private $district;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=35)
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
     * @ORM\ManyToOne(targetEntity="\Application\Entity\Country", inversedBy="city")
     * @ORM\JoinColumn(name="country_code", referencedColumnName="code")
     */
    private $country;
    
    /**
     * @ORM\ManyToOne(targetEntity="\Application\Entity\CountryLanguage", inversedBy="city")
     * @ORM\JoinColumn(name="country_code", referencedColumnName="country_code")
     */
    private $countryLanguage;
    
    public function __construct() 
    {
        $this->country = new ArrayCollection();
        $this->countryLanguage = new ArrayCollection();
    }
    
        
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    
    /**
     * Set countryCode
     *
     * @param string $countryCode
     *
     * @return City
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }
    
    /**
     * Get district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }
    
    /**
     * Set district
     *
     * @param string $district
     *
     * @return City
     */
    public function setDistrict($district)
    {
        $this->district = $district;
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
     * @return City
     */
    public function setPopulation($population)
    {
        $this->population = $population;
    }
    
    /**
     * Get countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->country->getName();
    }
    
    /**
     * Set countryName
     *
     * @param string $countryName
     *
     * @return City
     */
    public function setCountryName($countryName)
    {
        $this->country->setName($countryName);
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
     * @return City
     */
    public function setCountryLanguage($countryLanguage)
    {
        $this->countryLanguage->setLanguage($countryLanguage);
    }       
}