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
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class EntrepriseType extends AbstractType
{
/**
     * {@inheritdoc}
     */



public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

        ->add('civilite', ChoiceType::class, array(
            'label'=> "Civilité",
            'choices' => array(
                 'Homme' => true,
                 'Femme' => false,
                 ),
            'expanded' => true,
            'multiple' => false,
            'label_attr' => array(
                    'class' => 'radio-inline'
                )

            ))


        ->add('nom')->add('prenom')
        

        ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Mot de passe'),
                'second_options' => array('label' => 'Confirmer votre mot de passe'),
            ))
        ->add('email', EmailType::class)->add('telephone')
        ->add('nomE', TextType::class, array(
                'label'=> "Nom de votre entreprise"
            ))
        
        ->add('logoE', FileType::class, array(
                'label'=> "Logo de l'entreprise"
            ))
        ->add('descriptionE', TextType::class, array(
                'label'=> "Description de l'entreprise"
            ))
        ->add('adresseE', TextType::class, array(
                'label'=> "Adresse de l'entreprise"
            ))
        ->add('codePostalE', IntegerType::class, array(
                'label'=> "Code postal de l'entreprise"
            ))
        ->add('villeE', TextType::class, array(
                'label'=> "Ville de l'entreprise"
            ))
        ->add('votreFonction')
        ->add('enquete', ChoiceType::class, array(
            'label'=> "J’accepte de participer aux enquêtes liées aux projets des étudiants",
            'choices' => array(
                 'Oui' => true,
                 'Non' => false,
                 ),
            'expanded' => true,
            'multiple' => false,
            'label_attr' => array(
                    'class' => 'radio-inline'
                )
            )) 
        ->add('secteurActivite', EntityType::class, array(
                'class'        => 'EspacePlatformBundle:Secteur_d_activite',
                'choice_label' => 'nom',
                'multiple'     => false,
                'expanded'     => false,
                'label'=> "Secteur d'activité",
                'label_attr' => array(
                    'class' => 'radio-inline'
                ),
                ))
         ->add('newsletter', ChoiceType::class, array(
            'label'=> "J’accepte de recevoir la newsletter",
            'choices' => array(
                 'Oui' => true,
                 'Non' => false,
                 ),
            'expanded' => true,
            'multiple' => false,
            'label_attr' => array(
                    'class' => 'radio-inline'
                )
            ))       
               
        /*->add('captcha', CaptchaType::class)*/
        ->add('Sauvegarder', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Espace\UserBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'espace_userbundle_entreprise';
    }


}
