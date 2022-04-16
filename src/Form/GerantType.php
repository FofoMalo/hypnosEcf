<?php

namespace App\Form;

use App\Entity\Gerant;
use App\Entity\Hotel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class GerantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('roles', ChoiceType::class, [
                    'choices'=> [
                        'Admin'=> 'ROLE_ADMIN',
                        'User'=> 'USER_ROLE'
                    ],
            'expanded' => true,
            'multiple' => true,
            'label' => 'Rôles' 
            ])
            ->add('password')
            ->add('name')
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Gerant::class,
        ]);
    }
}
