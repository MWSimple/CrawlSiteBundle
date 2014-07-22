<?php

namespace MWSimple\CrawlSiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;

/**
 * TagFilterType filtro.
 * @author Nombre Apellido <name@gmail.com>
 */
class TagFilterType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tag', 'filter_text',array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add('field', 'filter_text',array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add('active', 'filter_choice',array(
                'attr'=> array('class'=>'form-control')
            ))
        ;

        $listener = function(FormEvent $event)
        {
            // Is data empty?
            foreach ((array)$event->getForm()->getData() as $data) {
                if ( is_array($data)) {
                    foreach ($data as $subData) {
                        if (!empty($subData)) {
                            return;
                        }
                    }
                } else {
                    if (!empty($data)) {
                        return;
                    }    
                }
            }
            $event->getForm()->addError(new FormError('Filter empty'));
        };
        $builder->addEventListener(FormEvents::POST_SUBMIT, $listener);
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
        return 'mwsimple_crawlsitebundle_tagfiltertype';
    }
}
