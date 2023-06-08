<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\LessThan;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SecondFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Level', NumberType::class, [
                'constraints' => [new LessThan(5)],
                'html5' => true,
                'help' => 'This field should be at most 4'
            ])
            ->add('Choice', ChoiceType::class, [
                'choices' => ['One' => 'One', 'Two' => 'Two', 'Three' => 'Three']
            ])
            ->add('submit', SubmitType::class)
        ;
    }
}
