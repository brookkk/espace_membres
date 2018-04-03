<?php

namespace Espace\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;





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
                'label'=> "Type de contrat"
                ))
        
        ->add('descOffre', TextType::class, array(
                'label'=> "Descriptif (mission, profil recherché, compétences, qualités, etc)"
            ))
        ->add('dureeContrat', TextType::class, array(
                'label'=> "Durée du contrat"
            ))
         ->add('niveauFormationP', EntityType::class, array(
                'class'        => 'EspacePlatformBundle:Niveau_de_formation',
                'choice_label' => 'nom',
                'multiple'     => false,
                'label'=> "Niveau de formation"
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
            'label'=> "Date de déduplication"
            ))
        ->add('codePostal', IntegerType::class, array(
                'label'=> "Code postal"
            ))
        ->add('villeE', TextType::class, array(
                'label'=> "Ville"
            ))
        ->add('domaineCompetence', EntityType::class, array(
                'class'        => 'EspacePlatformBundle:Domaine_de_competence',
                'choice_label' => 'nom',
                'multiple'     => false,
                'label'=> "Domaine de compétence"
                ))
        ->add('pieceJointeOffre', TextType::class, array(
                'label'=> "Pièce jointe d'une taille de 5024Ko et au format (pdf, doc, png, jpeg) "
            ))
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
