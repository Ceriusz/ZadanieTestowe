<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM; 

/**
 * City
 *
 * @ORM\Table(name="city")
 * @ORM\Entity
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
     * @ORM\Column(name="countryCode", type="string", length=3)
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
        return $this;
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
        return $this;
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
     * @return City
     */
    public function setPopulation($population)
    {
        $this->population = $population;
        return $this;
    }
        
}