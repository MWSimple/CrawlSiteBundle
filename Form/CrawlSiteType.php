<?php

namespace MWSimple\CrawlSiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * CrawlSiteType form.
 * @author Nombre Apellido <name@gmail.com>
 */
class CrawlSiteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('site')
            ->add('pattern')
            ->add('active')
            ->add('tags')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MWSimple\CrawlSiteBundle\Entity\CrawlSite'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mwsimple_crawlsitebundle_crawlsite';
    }
}
