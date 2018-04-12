<?php

namespace Espace\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Espace\PlatformBundle\Entity\Experience;

class ExperienceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('anneeDebut')
                ->add('anneeFin')
                ->add('entreprise')
                ->add('ville')
                ->add('codePostal')
                ->add('posteOccupe')
                ->add('missions');
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
