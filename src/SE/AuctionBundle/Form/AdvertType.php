<?php

namespace SE\AuctionBundle\Form;

use SE\AuctionBundle\Entity\Advert;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AdvertType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('category', EntityType::class, array(
                    'label'=>'Catégorie *',
                    'class'=>'SE\PortalBundle\Entity\Category',
                    'choice_label'=>'labelNormal'
                ))
                
                ->add('title', TextType::class, array('label'=> 'Titre *',
                    'attr' => array('maxlength' => 50,
                    'placeholder' => 'Le titre ne doit pas dépasser 50 caratères maximum')
                    ))
                
                ->add('detail', TextareaType::class, array('label'=> 'Détail *', 
                    'attr' => array('maxlength' => 4000, 
                        'class' => 'form-control textarea',
                        'placeholder' => 'Le détail ne doit pas dépasser 4000 caratères maximum')
                    ))

                ->add('save', SubmitType::class, 
                                array('label'=> 'Enregistrer',
                                    'attr'   =>  array(
                                                'class'   => 'btn se-btn-action btn')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SE\AuctionBundle\Entity\Advert'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'se_auctionbundle_advert';
    }
}
