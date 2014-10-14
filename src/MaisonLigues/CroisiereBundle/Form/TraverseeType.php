<?php

namespace MaisonLigues\CroisiereBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TraverseeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('laliaison_id','text',array('label'=>'saisir l\'id de la laison:'))
            ->add('lebateau_id','text',array('label'=>'saisir l\id du bateau:'))
            ->add('date','text',array('label'=>'saisir la date de la traversée:'))
            ->add('heure','text',array('label'=>'saisir l\'heure de depart de la traversée:'))
			->add('sauvegarder','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MaisonLigues\CroisiereBundle\Entity\Traversee'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'maisonligues_croisierebundle_traversee';
    }
}
