<?php

namespace App\Form;

use App\Entity\Publicacion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PublicacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Tipo')
            ->add('Categoria')
            ->add('Titulo')
            ->add('Contenido')
            ->add('Usuario')
            ->add('Localidad')
            ->add('Provincia')
            ->add('Claves')
            ->add('Tiempo')
            ->add('Caducidad')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Publicacion::class,
        ]);
    }
}
