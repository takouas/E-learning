<?php

namespace App\Form;

use App\Entity\Formation;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('imageFile', VichImageType::class, [
            'label' => 'File (JPEG or ,PNG)',
            'required' => false,
            'allow_delete' => false,
            'download_uri' => false
            ])
            ->add('titre', TextType::class, [
                'label' => 'Titre'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description'
            ])
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'designation'
            ])
            ->add('dateCreation', DateType::class, [
                'label' => 'dateCreat'
            ])
            ->add('dateModification', DateType::class, [
                'label' => 'dateEdit'
            ])
            
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Formation::class,
        ]);
    }
}
