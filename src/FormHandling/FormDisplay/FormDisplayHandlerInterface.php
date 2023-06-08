<?php

declare(strict_types=1);

namespace App\FormHandling\FormDisplay;

use Symfony\Component\Form\FormView;

interface FormDisplayHandlerInterface
{
    public function supports(FormView $form): bool;
    public function display(FormView $form, array $options = []): string;
}
