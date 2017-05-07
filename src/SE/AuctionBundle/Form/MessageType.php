<?php

namespace SE\AuctionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MessageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('content', TextareaType::class, array('label'=> false,
                    'attr' => array('maxlength' => 1000,
                    'placeholder' => 'Ecrivez votre message ici (1000 caratères maximum)')
                    ))
                 ->add('save', SubmitType::class, 
                                array('label'=> 'Envoyer',
                                    'attr'   =>  array(
                                                'class'   => 'btn se-btn-action')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SE\AuctionBundle\Entity\Message'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'se_auctionbundle_message';
    }


}
