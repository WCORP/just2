<?php

namespace Just2\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BidType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('price')
            ->add('createdAt')
            ->add('member')
            ->add('dateJust')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Just2\BackendBundle\Entity\Bid'
        ));
    }

    public function getName()
    {
        return 'just2_backendbundle_bidtype';
    }
}
