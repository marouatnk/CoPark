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
                    'placeholder' =>"Name of the parking"
                ]
            ])
            ->add('address' , TextType::class,[
                'attr' => 
                [
                    'placeholder' =>"Address "
                ]
            ])
            ->add('zipCode' , NumberType::class,[
                'attr' => 
                [
                    'placeholder' =>"Zip Code"
                ]
            ])
            ->add('country' , TextType::class,[
                'attr' => 
                [
                    'placeholder' =>"Country name"
                ]
            ])
            ->add('latitude', NumberType::class,[
                'attr' => 
                [
                    'placeholder' =>"Latitude"
                ]
            ])
            ->add('longitude', NumberType::class,[
                'attr' => 
                [
                    'placeholder' =>"Longitude"
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
