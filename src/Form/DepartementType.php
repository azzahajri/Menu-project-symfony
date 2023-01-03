<?php

namespace App\Form;

use App\Entity\Departement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class DepartementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomDept', TextType::class, [
                'attr' => [
                    'placeholder' => "Taper votre Nom Departement "
                ]
            ])
            ->add('Responsable', TextType::class, [
                'attr' => [
                    'placeholder' => "Responsable "
                ]
            ])
            ->add('nbrSalarie', TextType::class, [
                'attr' => [
                    'placeholder' => "Taper votre Nombre Salaire "
                ]
            ])
             ->add('image', FileType::class)
            ->add('Envoyer',SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Departement::class,
        ]);
    }
}
