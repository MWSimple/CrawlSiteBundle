<?php

namespace MWSimple\CrawlSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrawlSite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MWSimple\CrawlSiteBundle\Entity\CrawlSiteRepository")
 */
class CrawlSite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="pattern", type="string", length=255)
     */
    private $pattern;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @ORM\OneToMany(targetEntity="Tag", mappedBy="site")
     */
    private $tags;


    public function __toString()
    {
        return $this->getSite();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set site
     *
     * @param string $site
     * @return CrawlSite
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
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


    /**
     * Add tags
     *
     * @param \MWSimple\CrawlSiteBundle\Entity\Tag $tags
     * @return CrawlSite
     */
    public function addTag(\MWSimple\CrawlSiteBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \MWSimple\CrawlSiteBundle\Entity\Tag $tags
     */
    public function removeTag(\MWSimple\CrawlSiteBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }
}
