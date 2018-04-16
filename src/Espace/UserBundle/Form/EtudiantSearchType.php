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

class EtudiantSearchType extends AbstractType
{
/**
     * {@inheritdoc}
     */



public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
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
