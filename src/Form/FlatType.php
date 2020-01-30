<?php

namespace App\Form;

use App\Entity\Flat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FlatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cost', IntegerType::class, [
                'label' => 'Cena',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('surface', IntegerType::class, [
                'label' => 'Powierzchnia',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('postcode', TextType::class, [
                'label' => 'Kod pocztowy',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Miasto',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Zapisz',
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Flat::class,
        ]);
    }
}