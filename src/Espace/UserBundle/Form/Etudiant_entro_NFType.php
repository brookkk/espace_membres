<?php

namespace Espace\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class Etudiant_entro_NFType extends AbstractType
{
/**
     * {@inheritdoc}
     */



public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('profilTitre', TextType::class, array(
            'label'=> 'Titre de votre profil'
            ))
        ->add('mobilite', ChoiceType::class, array(
            'label'=> "Votre mobilité ?",
            'choices' => array(
                 'Nationale' => 1,
                 'Régionale' => 2,
                 'Départementale' => 3,
                 ),
            'expanded' => true,
            'multiple' => false,
            ))
       
        ->add('Sauvegarder', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Espace\UserBundle\Entity\Cv'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'espace_userbundle_etudiant';
    }


}
