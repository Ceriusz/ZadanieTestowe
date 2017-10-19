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
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=3)
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
     * @ORM\Column(name="is_official", type="string")
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
     */
    public function setLanguage($language)
    {
        $this->language = $language;
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
     */
    public function setIsOfficial($isOfficial)
    {
        if (!in_array($isOfficial, array(self::OFFICIAL_TRUE, self::OFFICIAL_FALSE))) {
            throw new \InvalidArgumentException("Invalid isOfficial value");
        }
        $this->isOfficial = $isOfficial;
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
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
    }      
}