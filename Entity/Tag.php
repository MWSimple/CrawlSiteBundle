<?php

namespace MWSimple\CrawlSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MWSimple\CrawlSiteBundle\Entity\TagRepository")
 */
class Tag
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
     * @ORM\Column(name="tag", type="string", length=255)
     */
    private $tag;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", length=255)
     */
    private $field;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @ORM\ManyToOne(targetEntity="CrawlSite", inversedBy="tags")
     * @ORM\JoinColumn(name="site_id", referencedColumnName="id")
     */
    private $site;


    public function __toString()
    {
        return $this->getTag();
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
     * Set tag
     *
     * @param string $tag
     * @return Tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set field
     *
     * @param string $field
     * @return Tag
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string 
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Tag
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
     * Set site
     *
     * @param \MWSimple\CrawlSiteBundle\Entity\CrawlSite $site
     * @return Tag
     */
    public function setSite(\MWSimple\CrawlSiteBundle\Entity\CrawlSite $site = null)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \MWSimple\CrawlSiteBundle\Entity\CrawlSite 
     */
    public function getSite()
    {
        return $this->site;
    }
}
