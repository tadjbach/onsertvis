<?php

namespace SE\AuctionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CommentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                 ->add('content', TextareaType::class, array('label'=> 'Contenu'))
                ->add('rate', ChoiceType::class, array('label'=> 'Note',
                            'choices' => array(
                                '0' => '0',
                                '1' => '1',
                                '2' => '2',
                                '3' => '3',
                                '4' => '4',
                                '5' => '5'
                            ),
                            'required'    => false
                        ))
                
                
        
                 ->add('save', SubmitType::class, 
                                array('label'=> 'Envoyer',
                                    'attr'   =>  array(
                                                'class'   => 'btn btn-primary')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SE\AuctionBundle\Entity\Comment'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'se_auctionbundle_comment';
    }


}
