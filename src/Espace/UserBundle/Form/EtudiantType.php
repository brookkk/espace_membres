<?php

namespace Espace\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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

class EtudiantType extends AbstractType
{
/**
     * {@inheritdoc}
     */



public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //$builder->add('username')->add('password')->add('email')->add('Sauvegarder',      SubmitType::class);

        $builder->add('civilite')->add('nom')->add('prenom')
        
         ->add('adresse')->add('codePostal')->add('ville')->add('email', EmailType::class)
         ->add('telephone')
         ->add('ddn', DateType::class, array(
            'widget' => 'choice',
            'years' => range(2017,1940),
            'format' => 'dd-MM-yyyy',
            'label'=> 'Date de naissance'
            ))
         ->add('numIne', TextType::class, array(
            'label'=> 'Numéro INE'
            ))
        ->add('niveauFormation', EntityType::class, array(
                'class'        => 'EspacePlatformBundle:Niveau_de_formation',
                'choice_label' => 'nom',
                'multiple'     => false,
                ))
        ->add('diplome', EntityType::class, array(
                'class'        => 'EspacePlatformBundle:Diplome',
                'choice_label' => 'nom',
                'multiple'     => true,
                'label'        => "Titre du diplome faisant objet de l'inscription"
                ))
        ->add('pcNom', TextType::class, array(
            'label'=> 'Nom'
            ))
        ->add('pcPrenom', TextType::class, array(
            'label'=> 'Prenom'
            ))
        ->add('newsletter')
        ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Mot de Passe'),
                'second_options' => array('label' => 'Confirmer votre mot de passe'),
            ))
        ->add('Sauvegarder', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Espace\UserBundle\Entity\Etudiant'
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
