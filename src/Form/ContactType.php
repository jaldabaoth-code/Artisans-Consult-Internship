<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('last_name', TextType::class, [
                'constraints' => new NotBlank([
                    'message' => 'Le nom est obligatoire'
                ]),
            ])
            ->add('first_name', TextType::class, [
                'constraints' => new NotBlank([
                    'message' => 'Le prénom obligatoire'
                ]),
            ])
            ->add('company', TextType::class, [
                'required' => false,
            ])
            ->add('adress', TextType::class, [
                'constraints' => new NotBlank([
                    'message' => 'L\'adresse est obligatoire'
                ]),
            ])
            ->add('youare', ChoiceType::class, [
                'expanded' => true,
                'required' => false,
                'placeholder' => false,
                'choices' => [
                    'Propriétaire' => 'Propriétaire',
                    'Locataire' => 'Locataire',
                ]
            ])
            ->add('postal_code', TextType::class, [
                'constraints' => new NotBlank([
                    'message' => 'Le code postal est obligatoire'
                ]),
            ])
            ->add('city', TextType::class, [
                'constraints' => new NotBlank([
                    'message' => 'La ville obligatoire'
                ]),
            ])
            ->add('telephone', TelType::class, [
                'constraints' => new NotBlank([
                    'message' => 'Le téléphone est obligatoire'
                ]),
            ])
            ->add('email', EmailType::class, [
                'constraints' => new NotBlank([
                    'message' => 'le mail est obligatoire'
                ]),
            ])
            ->add('type', ChoiceType::class, [
                'expanded' => true,
                'required' => false,
                'placeholder' => false,
                'choices' => [
                    'Maison' => 'Maison',
                    'Appartement' => 'Appartement',
                    'Local commercial' => 'Local commerciale',
                    'Autres' => 'Autres',
                ]
            ])
            ->add('type_other', TextType::class, [
                'required' => false
            ])
            ->add('age', ChoiceType::class, [
                'expanded' => true,
                'required' => false,
                'placeholder' => false,
                'choices' => [
                    'Neuf' => 'Maison',
                    'Ancien' => 'Appartement',
                    'Neuf' => 'Neuf',
                    'Ancien' => 'Ancien',
                    'Année de construction' => 'Année de construction',
                ]
            ])
            ->add('age_other', TextType::class, [
                'required' => false
            ])
            ->add('message', TextareaType::class, [
                'constraints' => new NotBlank([
                    'message' => 'le message est obligatoire'
                ]),
            ])
            ->add('day', ChoiceType::class, [
                'expanded' => true,
                'required' => false,
                'placeholder' => false,
                'choices' => [
                    'lundi' => 'lundi',
                    'Mardi' => 'Mardi',
                    'Mercredi' => 'Mercredi',
                    'Jeudi' => 'Jeudi',
                    'Vendredi' => 'Vendredi',
                    'Samedi' => 'Samedi',
                ]
            ])
            ->add('known', ChoiceType::class, [
                'expanded' => true,
                'required' => false,
                'placeholder' => false,
                'choices' => [
                    'Internet' => 'Internet',
                    'Presse' => 'Presse',
                    'Salon' => 'Salon',
                    'Recommandation' => 'Recommandation',
                    'Autres' =>  'Autres',
                ]
            ])
            ->add('known_other', TextType::class, [
                    'required' => false
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
