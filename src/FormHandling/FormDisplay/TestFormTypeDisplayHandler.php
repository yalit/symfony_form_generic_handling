<?php

declare(strict_types=1);

namespace App\FormHandling\FormDisplay;

use Symfony\Component\Form\FormView;
use App\FormHandling\FormDisplay\AbstractFormDisplayHandler;

final class TestFormTypeDisplayHandler extends AbstractFormDisplayHandler
{

    public function supports(FormView $form): bool 
    { 
        return $form->vars['id'] === 'test_form';
    }
    
}
