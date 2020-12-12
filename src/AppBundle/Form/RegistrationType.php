<?php

// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType

{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('nationalite')
            ->add('langues')
            ->add('dateNaissance')
            ->add('photoP')
            ->add('descriptions')
            ->add('sexe')
            ->add('etat')
            ->add('code')
            ->add('tel')
            ->add('Register', SubmitType::class, [
                'attr' => ['class' => 'save'],
            ]);
    }
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}