<?php

namespace VDM\VDMBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('rating', 'star_rating', array(
            'choices' => array(1 => 'ichi', 2  => 'ni', 3 => 'san', 4=> 'shi', 5 => 'go'),
            'expanded' => true,
            'multiple' => false
        ));
    }
}
