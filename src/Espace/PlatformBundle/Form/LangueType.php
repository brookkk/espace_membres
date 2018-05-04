<?php

namespace Espace\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Espace\PlatformBundle\Entity\Langue;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class LangueType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('langue')
                ->add('niveau', ChoiceType::class, array(
            'label'=> "Expérience",
            'choices' => array(
                 "Pas d'expérience" => 1,
                 "1 - 3 ans" => 2,
                 "3 - 5 ans" => 3,
                 "5 ans et plus" => 4,
                 ),
            'expanded' => false,
            'multiple' => false,
            ))
                
               
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Espace\PlatformBundle\Entity\Experience'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'espace_platformbundle_experience';
    }


}
