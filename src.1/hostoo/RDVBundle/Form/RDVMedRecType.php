<?php

namespace hostoo\RDVBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RDVMedRecType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('patients')
            ->add('medecin', EntityType::class,array(
                'class'=>'hostooUserBundle:Utilisateur',
                'multiple'=>false,
                'expanded'=>false,
                'query_builder'=>function(EntityRepository $er) {
                    return $er->lesmedecins();
                }
            ))
            ->add('motif')
            ->add('daterdv',DateType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\RDVBundle\Entity\RDVMed'
        ));
    }
}