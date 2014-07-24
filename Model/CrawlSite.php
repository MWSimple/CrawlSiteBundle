<?php

namespace MWSimple\Bundle\CrawlSiteBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrawlSite
 */
abstract class CrawlSite
{
    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=255)
     */
    protected $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    protected $url;

    /**
     * @var string
     *
     * @ORM\Column(name="pattern", type="string", length=255)
     */
    protected $pattern;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    protected $active;


    public function __toString()
    {
        return $this->getDomain().'/'.$this->getUrl();
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
     * Set domain
     *
     * @param string $domain
     * @return CrawlSite
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string 
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return CrawlSite
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set pattern
     *
     * @param string $pattern
     * @return CrawlSite
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;

        return $this;
    }

    /**
     * Get pattern
     *
     * @return string 
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return CrawlSite
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

}
