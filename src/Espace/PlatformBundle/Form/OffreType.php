<?php

namespace Espace\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;





class OffreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
$builder->add('titreOffre', TextType::class, array(
                'label'=> "Titre de l'offre"
            ))
         ->add('typeContrat', EntityType::class, array(
                'class'        => 'EspacePlatformBundle:Type_de_contrat',
                'choice_label' => 'nom',
                'multiple'     => false,
                'label'=> "Type de l'offre"
                ))
        /*->add('nomEntreprise')*/->add('descOffre')->add('dureeContrat')
         ->add('niveauFormationP', EntityType::class, array(
                'class'        => 'EspacePlatformBundle:Niveau_de_formation',
                'choice_label' => 'nom',
                'multiple'     => false,
                ))
         ->add('dateDePublication', DateType::class, array(
            'widget' => 'choice',
            'years' => range(2018,2020),
            'format' => 'dd-MM-yyyy',
            ))
         ->add('dateDeduplication', DateType::class, array(
            'widget' => 'choice',
            'years' => range(2018,2020),
            'format' => 'dd-MM-yyyy',
            ))
        ->add('codePostal')
        ->add('villeE')
        ->add('domaineCompetence', EntityType::class, array(
                'class'        => 'EspacePlatformBundle:Domaine_de_competence',
                'choice_label' => 'nom',
                'multiple'     => false,
                ))
        ->add('pieceJointeOffre')
        /*->add('dateDePublication')->add('dateDepublication')*/
        /*->add('niveauFormationP')*/
        ->add('Sauvegarder',      SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Espace\PlatformBundle\Entity\Offre'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'espace_platformbundle_offre';
    }


}
