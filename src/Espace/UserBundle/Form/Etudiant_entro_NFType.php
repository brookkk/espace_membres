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
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Espace\PlatformBundle\Form\ExperienceType;
use Espace\PlatformBundle\Form\LangueType;


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
        ->add('typeContratRecherche', EntityType::class, array(
                'class'        => 'EspacePlatformBundle:Type_de_contrat',
                'choice_label' => 'nom',
                'multiple'     => false,
                'label'=> "Type de contrat recherché"
                ))
        ->add('experience', ChoiceType::class, array(
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
        ->add('mobilite', ChoiceType::class, array(
            'label'=> "Votre mobilité ?",
            'choices' => array(
                 'Nationale' => 1,
                 'Régionale' => 2,
                 'Départementale' => 3,
                 ),
            'label_attr' => array(
                    'class' => 'radio-inline'
                ),
            'expanded' => true,
            'multiple' => false,
            ))
       ->add('facebookLink', TextType::class, array(
            'label'=> 'Facebook',
            'required'   => false,
            ))
       ->add('linkedinLink', TextType::class, array(
            'label'=> 'Linkedin',
            'required'   => false,
            ))
       ->add('viadeoLink', TextType::class, array(
            'label'=> 'Viadeo',
            'required'   => false,
            ))
       ->add('domaineCompetence', EntityType::class, array(
                'class'        => 'EspacePlatformBundle:Domaine_de_competence',
                'choice_label' => 'nom',
                'multiple'     => true,
                'expanded'     => true,
                'label'=> "Domaine de compétence",
                'label_attr' => array(
                    'class' => 'checkbox-inline'
                )
                ))
       ->add('experiences', CollectionType::class, array(
            'entry_type' => ExperienceType::class,
            'entry_options' => array('label' => false),
            'allow_add' => true,
            'label' => false,
            'by_reference' => false,
            'allow_delete' => true,
        ))
       ->add('langues', CollectionType::class, array(
            'entry_type' => LangueType::class,
            'entry_options' => array('label' => false),
            'allow_add' => true,
            'label' => false,
            'by_reference' => false,
            'allow_delete' => true,
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
        return 'espace_userbundle_etud';
    }


}
