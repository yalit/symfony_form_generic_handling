<?php

declare(strict_types=1);

namespace App\FormHandling\FormDisplay;

use Symfony\Component\Form\FormView;

interface FormDisplayHandlerManagerInterface 
{
    public function addHandler(FormDisplayHandlerInterface $formDisplayHandler): void;
    public function display(FormView $form, array $options = []): string;
}