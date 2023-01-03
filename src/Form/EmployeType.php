<?php

namespace App\Form;

use App\Entity\Employe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Departement;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class EmployeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => [
                    'placeholder' => "Taper votre Nom "
                ]
            ])
            ->add('salaire', TextType::class, [
                'attr' => [
                    'placeholder' => "Taper votre Salaire "
                ]
                ])
            ->add('born_At')
            ->add('email', TextType::class, [
                'attr' => [
                    'placeholder' => "Taper votre email ",
                    
                ]
                ])
            ->add('Departement', EntityType::class, [
                'class' => Departement::class,
                'choice_label' => 'id'
            ])
            ->add('Envoyer',SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employe::class,
        ]);
    }
}
