<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM; 

/**
 * CountryLanguage
 *
 * @ORM\Table(name="country_language")
 * @ORM\Entity
 *
 */
class CountryLanguage
{
    const OFFICIAL_TRUE = 'T';
    const OFFICIAL_FALSE = 'F';
    
//    /**
//     * @var integer
//     *
//     * @ORM\Column(name="id", type="integer", nullable=false)
//     * @ORM\Id
//     * @ORM\GeneratedValue(strategy="IDENTITY")
//     */
//    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="countryCode", type="string", length=3)
     * @ORM\Id
     *
     */
    private $countryCode;
    
    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=30)
     *
     */
    private $language;
    
    /**
     * @var string
     *
     * @ORM\Column(name="isOfficial", type="string")
     *
     */
    private $isOfficial;
    
    /**
     * @var float
     *
     * @ORM\Column(name="percentage", type="float", length=4, precision=1)
     *
     */
    private $percentage;
     
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
     * @return CountryLanguage
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }
    
    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
    
    /**
     * Set language
     *
     * @param string $language
     *
     * @return CountryLanguage
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }
    
    /**
     * Get isOfficial
     *
     * @return string
     */
    public function getIsOfficial()
    {
        return $this->isOfficial;
    }
      
    /**
     * Set isOfficial
     *
     * @param string $isOfficial
     *
     * @return CountryLanguage
     */
    public function setIsOfficial($isOfficial)
    {
        if (!in_array($isOfficial, array(self::OFFICIAL_TRUE, self::OFFICIAL_FALSE))) {
            throw new \InvalidArgumentException("Invalid isOfficial value");
        }
        $this->isOfficial = $isOfficial;
        return $this;
    }

    /**
     * Get percentage
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }
    
    /**
     * Set percentage
     *
     * @param float $percentage
     *
     * @return CountryLanguage
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
        return $this;
    }
        
}