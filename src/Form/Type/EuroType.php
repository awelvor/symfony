<?php
// src/Form/Type/EuroType.php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;

class EuroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('compte', TextType::class)
              ->add('libelle', TextType::class)
            ->add('credit',NumberType::class)
            ->add('debit',NumberType::class)
            ->add('date', TextType::class)
            ->add('budget', TextType::class)
            ->add('cbid', TextType::class)
            ->add('save', SubmitType::class)
        ;
    }
   
}