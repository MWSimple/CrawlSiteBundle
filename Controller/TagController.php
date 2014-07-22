<?php

namespace MWSimple\CrawlSiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use MWSimple\CrawlSiteBundle\Entity\Tag;
use MWSimple\CrawlSiteBundle\Form\TagType;
use MWSimple\CrawlSiteBundle\Form\TagFilterType;

/**
 * Tag controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/tag")
 */
class TagController extends Controller
{
    /**
     * Configuration file.
     */
    private $config = array(
        'yml' => 'MWSimple/CrawlSiteBundle/Resources/config/Tag.yml',
    );

    /**
     * Lists all Tag entities.
     *
     * @Route("/", name="admin_tag")
     * @Method("GET")
     * @Template("MWSimpleAdminCrudBundle:Default:index.html.twig")
     */
    public function indexAction($config = null)
    {
        $this->config['filterType'] = new TagFilterType();
        $response = parent::indexAction($this->config);

        return $response;
    }

    /**
     * Creates a new Tag entity.
     *
     * @Route("/", name="admin_tag_create")
     * @Method("POST")
     * @Template("MWSimpleAdminCrudBundle:Default:new.html.twig")
     */
    public function createAction($config = null)
    {
        $this->config['newType'] = new TagType();
        $response = parent::createAction($this->config);

        return $response;
    }

    /**
     * Displays a form to create a new Tag entity.
     *
     * @Route("/new", name="admin_tag_new")
     * @Method("GET")
     * @Template("MWSimpleAdminCrudBundle:Default:new.html.twig")
     */
    public function newAction($config = null)
    {
        $this->config['newType'] = new TagType();
        $response = parent::newAction($this->config);

        return $response;
    }

    /**
     * Finds and displays a Tag entity.
     *
     * @Route("/{id}", name="admin_tag_show")
     * @Method("GET")
     * @Template("MWSimpleAdminCrudBundle:Default:show.html.twig")
     */
    public function showAction($id, $config = null)
    {
        $response = parent::showAction($id, $this->config);

        return $response;
    }

    /**
     * Displays a form to edit an existing Tag entity.
     *
     * @Route("/{id}/edit", name="admin_tag_edit")
     * @Method("GET")
     * @Template("MWSimpleAdminCrudBundle:Default:edit.html.twig")
     */
    public function editAction($id, $config = null)
    {
        $this->config['editType'] = new TagType();
        $response = parent::editAction($id, $this->config);

        return $response;
    }

    /**
     * Edits an existing Tag entity.
     *
     * @Route("/{id}", name="admin_tag_update")
     * @Method("PUT")
     * @Template("MWSimpleAdminCrudBundle:Default:edit.html.twig")
     */
    public function updateAction($id, $config = null)
    {
        $this->config['editType'] = new TagType();
        $response = parent::updateAction($id, $this->config);

        return $response;
    }

    /**
     * Deletes a Tag entity.
     *
     * @Route("/{id}", name="admin_tag_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id, $config = null)
    {
        $response = parent::deleteAction($id, $this->config);

        return $response;
    }
}