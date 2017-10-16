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
     * @ORM\Column(name="GNPOld", type="float", length=10, precision=2)
     *
     */
    private $GNPOld;
	
    /**
     * @var string
     *
     * @ORM\Column(name="governmentForm", type="string", length=45)
     *
     */
    private $governmentForm;
	
    /**
     * @var string
     *
     * @ORM\Column(name="headOfState", type="string", length=60)
     *
     */
    private $headOfState;
	
    /**
     * @var smallint
     *
     * @ORM\Column(name="indeapYear", type="smallint", length=6)
     *
     */
    private $indeapYear;
	
    /**
     * @var float
     *
     * @ORM\Column(name="lifeExpectancy", type="float", length=3, precision=1)
     *
     */
    private $lifeExpectancy;
	
    /**
     * @var string
     *
     * @ORM\Column(name="localName", type="string", length=45)
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
     * @ORM\Column(name="surfaceArea", type="float", length=10, precision=2)
     *
     */
    private $surfaceArea;
    
        
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
     * Get CountryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    
    /**
     * Set CountryCode
     *
     * @param string $CountryCode
     *
     * @return Country
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }
    
    /**
     * Get District
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->District;
    }
    
    /**
     * Set District
     *
     * @param string $District
     *
     * @return Country
     */
    public function setDistrict($District)
    {
        $this->District = $District;
        return $this;
    }
    
    /**
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    
    /**
     * Set Name
     *
     * @param string $Name
     *
     * @return Country
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }
    
    /**
     * Get Population
     *
     * @return integer
     */
    public function getPopulation()
    {
        return $this->Population;
    }
    
    /**
     * Set Population
     *
     * @param integer $Population
     *
     * @return Country
     */
    public function setPopulation($Population)
    {
        $this->Population = $Population;
        return $this;
    }
        
}