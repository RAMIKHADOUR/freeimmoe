<?php

namespace App\Form;

use App\Entity\Propertys;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropertysType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code')
            ->add('surface')
            ->add('description')
            ->add('prix')
            ->add('chambres')
            ->add('salle_bains')
            ->add('etages')
            ->add('numero_etage')
            ->add('adresse')
            ->add('ville')
            ->add('code_postale')
            ->add('region')
            ->add('internet')
            ->add('balcon')
            ->add('garage')
            ->add('gym')
            ->add('piscine')
            ->add('camera')
            ->add('image')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('user')
            ->add('categorys')
            ->add('typeprops')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Propertys::class,
        ]);
    }
}
