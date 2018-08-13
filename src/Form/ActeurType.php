<?php

namespace App\Form;

use App\Entity\Acteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ActeurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomActeur')
            ->add('prenomActeur')
            ->add('sexeActeur')
            ->add('dateNaissanceActeur', DateType::class,
                array(
                'years' => range(date('1930'), date('Y')),
                'format' => 'ddMMyyyy',
                'data' => new \DateTime(),))
            ->add('idFilm')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Acteur::class,
        ]);
    }
}
