<?php

namespace App\Form;

use App\entity\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
/*use Symfony\Component\PropertyInfo\Type;*/

class formType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder 
            ->add("sujet", TextType ::class)
            ->add("mail", EmailType::class)
            ->add("contenu", TextareaType::class);
    }

   public function configureOptions(OptionsResolver $resolver)
   {
        $resolver->setDefaults([
            "data_class"=> Form ::class
        ]

        );
   }


}