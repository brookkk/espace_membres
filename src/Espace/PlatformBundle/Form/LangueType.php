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
                    'label'=> "Niveau",
                    'choices' => array(
                         "Débutant" => 1,
                         "Intermédiaire" => 2,
                         "Avancé" => 3,
                         "Langue maternelle" => 4,
                         ),
                    'expanded' => false,
                    'multiple' => false,
                    ));
                
               
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
