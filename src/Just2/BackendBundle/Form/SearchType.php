<?php

namespace Just2\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ocassion','entity',array(
                'class' =>  'Just2BackendBundle:Ocassion',
                ))
            // ->add('price')
            // ->add('categoryOcassion','entity',array(
            //     'class' =>  'Just2BackendBundle:CategoryOcassion',
            //     ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Just2\BackendBundle\Entity\Ocassion'
        ));
    }

    public function getName()
    {
        return 'just2_backendbundle_searchtype';
    }
}
