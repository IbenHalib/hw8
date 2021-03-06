<?php

namespace Vadim\GuestBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text')
            ->add('email', 'email')
            ->add('post', 'textarea')
            ->add('save', 'submit') ;

    }
    public function getName()
    {
        return 'post';
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Vadim\GuestBundle\Entity\Post',
        ));
    }
}
