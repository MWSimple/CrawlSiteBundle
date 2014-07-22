<?php

namespace MWSimple\CrawlSiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * TagType form.
 * @author Nombre Apellido <name@gmail.com>
 */
class TagType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tag')
            ->add('field')
            ->add('active')
            ->add('site')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MWSimple\CrawlSiteBundle\Entity\Tag'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mwsimple_crawlsitebundle_tag';
    }
}
