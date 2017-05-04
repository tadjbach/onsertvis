<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SE\UserBundle\Form\Type;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProfileFormType extends AbstractType
{
    /**
     * @var string
     */
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->buildUserForm($builder, $options);

        $constraintsOptions = array(
            'message' => 'fos_user.current_password.invalid',
        );

        if (!empty($options['validation_groups'])) {
            $constraintsOptions['groups'] = array(reset($options['validation_groups']));
        }

        $builder->add('current_password', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'), array(
            'label' => 'form.current_password',
            'translation_domain' => 'FOSUserBundle',
            'mapped' => false,
            'constraints' => new UserPassword($constraintsOptions),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'csrf_token_id' => 'profile',
            // BC for SF < 2.8
            'intention' => 'profile',
        ));
    }

    // BC for SF < 3.0
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fos_user_profile';
    }

    /**
     * Builds the embedded form representing the user.
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('accountType', ChoiceType::class, array('label'=> 'Vous êtes',
                'choices'    => array(
                    'Particulier' => 'Particular',
                    'Société' => 'Society',
                    'Autre'=>'Other'
                ),
            ))
            ->add('username', null, array('label' => 'form.username', 
                                            'translation_domain' => 'FOSUserBundle'))

            ->add('civility', ChoiceType::class, array('label'=> 'Civilité',
                'choices'    => array(
                    'M' => 'm',
                    'Mme' => 'mme',
                    'Mlle' => 'mlle',
                )
            ))
            ->add('siret', TextType::class, array('label'=> 'SIRET'))
            ->add('name', TextType::class, array('label'=> 'Nom'))
            ->add('firstName', TextType::class, array('label'=> 'Prénom'))
            ->add('address', TextType::class, array('label'=> 'Adresse'))
            ->add('phoneNumber', TextType::class, array('label'=> 'N° téléphone'))
            ->add('detail', TextareaType::class, array('label'=> 'À propos de moi'))
            ->add('categories', EntityType::class, 
                    array('label'=>'Vos services préférés',
                        'class'=> 'SEPortalBundle:Category',
                        'choice_label'=>'labelNormal',
                        'multiple'=>true,
                        'expanded' => true,
                        ))
            
                ->add('calendar', EntityType::class, 
                    array('label'=>'Vos disponibilités',
                        'class'=> 'SEAuctionBundle:Calendar',
                        'choice_label'=>'day_fr',
                        'multiple'=>true,
                        'expanded' => true,
                        ))
                
                 ->add('calendar', EntityType::class, 
                    array('label'=>'Vos disponibilités',
                        'class'=> 'SEAuctionBundle:Calendar',
                        'choice_label'=>'day_fr',
                        'multiple'=>true,
                        'expanded' => true,
                        ) )
                
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
            ->add('isNewsLetter', CheckboxType::class, 
                    array('label'=> 'Je souhaite être informé des prochaines demandes du site'));
    }
}
