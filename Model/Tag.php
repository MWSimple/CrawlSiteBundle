<?php

namespace MWSimple\Bundle\CrawlSiteBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 */
abstract class Tag
{
    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=255)
     */
    protected $tag;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tag_use_attr", type="string", length=255, nullable=true)
     */
    protected $tagUseAttr;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", length=255)
     */
    protected $field;

    /**
     * @var string
     *
     * @ORM\Column(name="id_array", type="string", length=255)
     */
    protected $idArray;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    protected $active;

    /**
     * @var boolean
     *
     * @ORM\Column(name="src_img_use_domain", type="boolean", nullable=true)
     */
    protected $srcImgUseDomain;


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
     * Set tagUseAttr
     *
     * @param string $tagUseAttr
     * @return Tag
     */
    public function setTagUseAttr($tagUseAttr)
    {
        $this->tagUseAttr = $tagUseAttr;

        return $this;
    }

    /**
     * Get tagUseAttr
     *
     * @return string 
     */
    public function getTagUseAttr()
    {
        return $this->tagUseAttr;
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
     * Set idArray
     *
     * @param string $idArray
     * @return Tag
     */
    public function setIdArray($idArray)
    {
        $this->idArray = $idArray;

        return $this;
    }

    /**
     * Get idArray
     *
     * @return string 
     */
    public function getIdArray()
    {
        return $this->idArray;
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
     * Set srcImgUseDomain
     *
     * @param boolean $srcImgUseDomain
     * @return Tag
     */
    public function setSrcImgUseDomain($srcImgUseDomain)
    {
        $this->srcImgUseDomain = $srcImgUseDomain;

        return $this;
    }

    /**
     * Get srcImgUseDomain
     *
     * @return boolean 
     */
    public function getSrcImgUseDomain()
    {
        return $this->srcImgUseDomain;
    }

}
