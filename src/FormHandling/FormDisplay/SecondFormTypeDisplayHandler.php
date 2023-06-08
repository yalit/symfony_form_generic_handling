<?php

declare(strict_types=1);

namespace App\FormHandling\FormDisplay;

use Symfony\Component\Form\FormView;
use App\FormHandling\FormDisplay\AbstractFormDisplayHandler;

final class SecondFormTypeDisplayHandler extends AbstractFormDisplayHandler
{

    public function supports(FormView $form): bool 
    { 
        return $form->vars['id'] === 'second_form';
    }

    public function display(FormView $form, array $options = []): string
    {
        return $this->twig->render('form/secondFormType.html.twig', ['form' => $form]);
    }
    
}
