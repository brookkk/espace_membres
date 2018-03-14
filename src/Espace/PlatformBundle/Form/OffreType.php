<?php

namespace Espace\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('refOffre')->add('nomEntreprise')->add('titreOffre')->add('typeContrat')->add('descOffre')->add('dureeContrat')->add('niveauFormationP')->add('dateDePublication')->add('dateDepublication')->add('villeE')->add('domaineCompetence')->add('pieceJointeOffre')->add('cPE');
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
