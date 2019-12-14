<?php

namespace App\Form;

use App\Entity\Parking;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;


class ParkingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class,[
                'attr' => 
                [
                    'placeholder' =>"Name of the road"
                ]
            ])
            ->add('address', TextType::class,[
                'attr' => 
                [
                    'placeholder' =>"Address name"
                ]
            ])
            ->add('zipCode', NumberType::class,[
                'attr' => 
                [
                    'placeholder' =>"Zip Code"
                ]
            ])
            ->add('latitude', NumberType::class,[
                'attr' => 
                [
                    'placeholder' =>"Latitude"
                ]
            ])
            ->add('longtitude', NumberType::class,[
                'attr' => 
                [
                    'placeholder' =>"Longtitude"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Parking::class,
            'csrf_protection' => true,
        ]);
    }
}
