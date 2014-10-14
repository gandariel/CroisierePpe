<?php

namespace MaisonLigues\CroisiereBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LiaisonType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lesecteur','text',array('label'=>'Saisir l\'id du secteur:'))
			->add('portdepart','text',array('label'=>'Saisir le port de depart:'))
			->add('portarrive_id','text',array('label'=>'Saisir le port d\'arrive:'))
			->add('distance','text',array('label'=>'Saisir la distance:'))
			->add('sauvegarder','submit')
		;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MaisonLigues\CroisiereBundle\Entity\Liaison'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'maisonligues_croisierebundle_liaison';
    }
}
