<?php

namespace SE\PlatformBundle\Form;

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

                ->add('rate', ChoiceType::class, array('label'=> "Note de l'avis *",
                      'placeholder' => "Note de l'avis",
                            'choices' => array(
                                        'À éviter - 1/5' => '1',
                                        'Décevant - 2/5' => '2',
                                        'Bien - 3/5' =>  '3' ,
                                        'Très bien - 4/5' => '4',
                                        'Parfait - 5/5' => '5'
                            ),
                            'required'    => true
                        ))
                        ->add('content', TextareaType::class, array('label'=> "Commentaire de l'avis *"))


                 ->add('save', SubmitType::class,
                                array('label'=> 'Envoyer',
                                    'attr'   =>  array(
                                                'class'   => 'btn btn-primary btn-block')));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SE\PlatformBundle\Entity\Comment'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'se_platformbundle_comment';
    }


}
