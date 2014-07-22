<?php

namespace MWSimple\CrawlSiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use MWSimple\CrawlSiteBundle\Entity\CrawlSite;
use MWSimple\CrawlSiteBundle\Form\CrawlSiteType;
use MWSimple\CrawlSiteBundle\Form\CrawlSiteFilterType;

/**
 * CrawlSite controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/crawlsite")
 */
class CrawlSiteController extends Controller
{
    /**
     * Configuration file.
     */
    private $config = array(
        'yml' => 'MWSimple/CrawlSiteBundle/Resources/config/CrawlSite.yml',
    );

    /**
     * Lists all CrawlSite entities.
     *
     * @Route("/", name="admin_crawlsite")
     * @Method("GET")
     * @Template("MWSimpleAdminCrudBundle:Default:index.html.twig")
     */
    public function indexAction($config = null)
    {
        $this->config['filterType'] = new CrawlSiteFilterType();
        $response = parent::indexAction($this->config);

        return $response;
    }

    /**
     * Creates a new CrawlSite entity.
     *
     * @Route("/", name="admin_crawlsite_create")
     * @Method("POST")
     * @Template("MWSimpleAdminCrudBundle:Default:new.html.twig")
     */
    public function createAction($config = null)
    {
        $this->config['newType'] = new CrawlSiteType();
        $response = parent::createAction($this->config);

        return $response;
    }

    /**
     * Displays a form to create a new CrawlSite entity.
     *
     * @Route("/new", name="admin_crawlsite_new")
     * @Method("GET")
     * @Template("MWSimpleAdminCrudBundle:Default:new.html.twig")
     */
    public function newAction($config = null)
    {
        $this->config['newType'] = new CrawlSiteType();
        $response = parent::newAction($this->config);

        return $response;
    }

    /**
     * Finds and displays a CrawlSite entity.
     *
     * @Route("/{id}", name="admin_crawlsite_show")
     * @Method("GET")
     * @Template("MWSimpleAdminCrudBundle:Default:show.html.twig")
     */
    public function showAction($id, $config = null)
    {
        $response = parent::showAction($id, $this->config);

        return $response;
    }

    /**
     * Displays a form to edit an existing CrawlSite entity.
     *
     * @Route("/{id}/edit", name="admin_crawlsite_edit")
     * @Method("GET")
     * @Template("MWSimpleAdminCrudBundle:Default:edit.html.twig")
     */
    public function editAction($id, $config = null)
    {
        $this->config['editType'] = new CrawlSiteType();
        $response = parent::editAction($id, $this->config);

        return $response;
    }

    /**
     * Edits an existing CrawlSite entity.
     *
     * @Route("/{id}", name="admin_crawlsite_update")
     * @Method("PUT")
     * @Template("MWSimpleAdminCrudBundle:Default:edit.html.twig")
     */
    public function updateAction($id, $config = null)
    {
        $this->config['editType'] = new CrawlSiteType();
        $response = parent::updateAction($id, $this->config);

        return $response;
    }

    /**
     * Deletes a CrawlSite entity.
     *
     * @Route("/{id}", name="admin_crawlsite_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id, $config = null)
    {
        $response = parent::deleteAction($id, $this->config);

        return $response;
    }
}