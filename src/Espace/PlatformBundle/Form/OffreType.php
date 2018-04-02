<?php

namespace Espace\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;




class OffreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titreOffre')
         ->add('typeContrat', EntityType::class, array(
                'class'        => 'EspacePlatformBundle:Type_de_contrat',
                'choice_label' => 'nom',
                'multiple'     => false,
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
        /*->add('refOffre')*/

       
       
        ->add('Secteur_activite', EntityType::class, array(
                'class'        => 'EspacePlatformBundle:Secteur_d_activite',
                'choice_label' => 'nom',
                'multiple'     => false,
                ))
        ->add('villeE')->add('domaineCompetence')->add('pieceJointeOffre')->add('cPE')
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
