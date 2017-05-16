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

class ProfileFormType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
          ->add('accountType', ChoiceType::class, array('label'=> 'Vous êtes',
              'choices'    => array(
                  'Particulier' => 'Particular',
                  'Société' => 'Society',
                  'Autre'=>'Other')))

          ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))

          ->add('civility', ChoiceType::class, array('label'=> 'Civilité',
              'choices'    => array(
                  'M' => 'm',
                  'Mme' => 'mme',
                  'Mlle' => 'mlle')))

          ->add('name', TextType::class, array('label'=> 'Nom'))
          ->add('firstName', TextType::class, array('label'=> 'Prénom'))
          ->add('siret', TextType::class, array('label'=> 'SIRET',
                                      'required' => false))

          ->add('address', TextType::class, array('label'=> 'Adresse'))

          ->add('cpCity', TextType::class,
             array('label'=>'Code postal'))

          ->add('phoneNumber', TextType::class, array('label'=> 'N° téléphone'))
          ->add('detail', TextareaType::class, array('label'=> 'À propos de moi'))

          ->add('payment', EntityType::class,
              array('label'=>'Vos modes de paimenent préférés',
                  'class'=> 'SEPlatformBundle:Payment',
                  'choice_label'=>'labelNormal',
                  'multiple'=>true,
                  'expanded' => true))

          ->add('categories', EntityType::class,
                  array('label'=>'Vos services préférés (disponible bientôt)',
                      'class'=> 'SEPlatformBundle:Category',
                      'choice_label'=>'labelNormal',
                      'multiple'=>true,
                      'expanded' => true,
                      'disabled' => true))

          ->add('calendar', EntityType::class,
                  array('label'=>'Vos disponibilités',
                      'class'=> 'SEPlatformBundle:Calendar',
                      'choice_label'=>'day_fr',
                      'multiple'=>true,
                      'expanded' => true))

          ->add('isNewsLetter', CheckboxType::class,
                    array('label'=> 'Je souhaite recevoir les nouvelles du site.', 'required' => false))

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
