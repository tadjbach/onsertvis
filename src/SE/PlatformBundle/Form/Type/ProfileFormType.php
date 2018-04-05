<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SE\PlatformBundle\Form\Type;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ProfileFormType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
          ->add('accountType', ChoiceType::class, array('label'=> 'Vous êtes *',
              'choices'    => array(
                  'Particulier' => 'Particular',
                  'Société' => 'Society',
                  'Autre'=>'Other')))

          ->add('username', null, array('label' => 'Nom d\'utilisateur ou de société *',
                            'attr' => array('maxlength' => 50,
                            'placeholder' => 'Le Nom d\'utilisateur ne doit pas dépasser 50 caractères')

                          ))

          ->add('civility', ChoiceType::class, array('label'=> 'Civilité *',
              'choices'    => array(
                  'M' => 'm',
                  'Mme' => 'mme',
                  'Mlle' => 'mlle')))

          ->add('name', TextType::class, array('label'=> 'Nom *',
          'attr' => array('maxlength' => 50,
          'placeholder' => 'Le Nom ne doit pas dépasser 50 caractères')))

          ->add('firstName', TextType::class, array('label'=> 'Prénom *',
          'attr' => array('maxlength' => 50,
          'placeholder' => 'Le Prénom ne doit pas dépasser 50 caractères')))

          ->add('siret', TextType::class, array('label'=> 'SIRET',
                    'required' => false,
                    'attr' => array('maxlength' => 14,
                                    'minlength' => 14,
                                    'placeholder' => 'Le numéro de SIRET doit être composé uniquement de chiffre.')
                    ))


          ->add('address', TextType::class, array('label'=> 'Adresse *',
          'attr' => array('maxlength' => 100,
          'placeholder' => 'L\'adresse ne doit pas dépasser 100 caractères')))

          ->add('cpCity', TextType::class,
             array('label'=>'Code postal & Ville *',
             'attr' => array( 'maxlength' => 100,
                              'placeholder' => 'Tapez le code postal ou la nom de la ville'
                            )))

          ->add('phoneNumber', TextType::class, array('label'=> 'N° téléphone *',
          'attr' => array('maxlength' => 10,
                          'minlength' => 10,
                          'placeholder' => '')))

          ->add('detail', TextareaType::class, array('label'=> 'À propos de moi', 'required' => false,
                    'attr' => array('maxlength' => 4000,
                          'class' => 'form-control textarea',
                          'placeholder' => 'Le détail ne doit pas dépasser 4000 caratères')))

          ->add('payment', EntityType::class,
              array('label'=>'Vos modes de paimenent préférés',
                  'class'=> 'SEPlatformBundle:Payment',
                  'choice_label'=>'labelNormal',
                  'multiple'=>true,
                  'expanded' => true))

          ->add('categories', EntityType::class,
                  array('label'=>'Vos services proposés',
                      'class'=> 'SEPlatformBundle:Category',
                      'choice_label'=>'labelNormal',
                      'multiple'=>true,
                      'expanded' => true))

          ->add('calendar', EntityType::class,
                  array('label'=>'Vos disponibilités',
                      'class'=> 'SEPlatformBundle:Calendar',
                      'choice_label'=>'day_fr',
                      'multiple'=>true,
                      'expanded' => true))

          ->add('isNewsLetter', CheckboxType::class,
                    array('label'=> 'Je souhaite recevoir les nouvelles du site.', 'required' => false))

            ->add('isDetailVisible', CheckboxType::class,
                      array('label'=> 'Afficher mes information de contact sur le site.', 'required' => false))

            ->add('isJobber', CheckboxType::class,
                      array('label'=> 'Je souhaite figurer dans la liste des Artisans.', 'required' => false))

          ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'),
                  array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'));

        $builder->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
          'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
          'options' => array('translation_domain' => 'FOSUserBundle'),
          'first_options' => array('label' => 'form.new_password'),
          'second_options' => array('label' => 'form.new_password_confirmation'),
          'invalid_message' => 'fos_user.password.mismatch',
          'required' => false
      ));
 }

 public function getParent() {
     return 'FOS\UserBundle\Form\Type\ProfileFormType';

     // Or for Symfony < 2.8
      //return 'fos_user_profile_edit';
 }

 public function getBlockPrefix() {
     return 'se_platform_user_profile';
 }

 // For Symfony 2.x
 public function getName(){
     return $this->getBlockPrefix();
 }


}
