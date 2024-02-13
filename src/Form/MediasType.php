<?php

namespace App\Form;

use App\Entity\Medias;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MediasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('photo1')
            ->add('photo2')
            ->add('photo3')
            ->add('photo4')
            ->add('photo5')
            ->add('video1')
            ->add('video2')
            ->add('video3')
            ->add('video4')
            ->add('video5')
            ->add('virtuel1')
            ->add('virtuel2')
            ->add('property')
            ->add('propertys')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medias::class,
        ]);
    }
}
