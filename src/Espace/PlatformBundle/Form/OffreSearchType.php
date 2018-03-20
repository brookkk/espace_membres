<?php

namespace Espace\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class OffreSearchType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder/*->add('refOffre')->add('nomEntreprise')->add('titreOffre')->add('descOffre')->add('dureeContrat')*/

        ->add('niveauFormationP', EntityType::class, array(
                'class'        => 'EspacePlatformBundle:Niveau_de_formation',
                'choice_label' => 'nom',
                'multiple'     => false,
                ))
        ->add('typeContrat', EntityType::class, array(
                'class'        => 'EspacePlatformBundle:Type_de_contrat',
                'choice_label' => 'nom',
                'multiple'     => false,
                ))
        ->add('Secteur_activite', EntityType::class, array(
                'class'        => 'EspacePlatformBundle:Secteur_d_activite',
                'choice_label' => 'nom',
                'multiple'     => false,
                ))
        /*->add('villeE')->add('domaineCompetence')->add('pieceJointeOffre')->add('cPE')*/
        /*->add('dateDePublication')->add('dateDepublication')*/
        /*->add('niveauFormationP')*/
        ->add('Rechercher',      SubmitType::class);
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
