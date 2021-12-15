<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\FormationEnLigne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class FormationEnLigneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('IdFormation', TextType::class, [
            'label' => 'IdFormation'
        ])

        ->add('titre', TextType::class, [
            'label' => 'Titre'
        ])
        ->add('PasswordFormation', TextType::class, [
            'label' => 'PasswordFormation'
        ])
       
        ->add('DateFormation', DateType::class, [
            'label' => 'DateTraining'
        ])
        ->add('HeureFormation', TimeType::class, [
            'label' => 'HeureFormation'
        ])
            ->add('Enseignant', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email'
            ])
            ->add('Etudiant', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email',
                'multiple'=>true
            ])
          
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FormationEnLigne::class,
        ]);
    }
}
