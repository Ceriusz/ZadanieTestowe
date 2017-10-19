<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    
    
    public function __construct() 
    {
        $this->country = new ArrayCollection();
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
     */
    public function setPopulation($population)
    {
        $this->population = $population;
    }
    
    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country->getName();
    }
    
    /**
     * Set country
     *
     * @param string $country
     *
     */
    public function setCountry($country)
    {
        $this->country->setName($country);
    }
    
    /**
     * Get countryLanguage
     *
     * @return string
     */
    public function getCountryLanguage()
    {
        return $this->country->getCountryLanguage();
    }
    
     /**
     * Set country
     *
     * @param string $countryLanguage
     *
     */
    public function setCountryLanguage($countryLanguage)
    {
        return $this->country->setCountryLanguage($countryLanguage);
    }  
}