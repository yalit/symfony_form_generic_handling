<?php

declare(strict_types=1);

namespace App\FormHandling\FormData;

use App\FormHandling\FormData\FormDataHandlerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

abstract class AbstractFormDataHandler implements FormDataHandlerInterface
{

    abstract public function supports(FormInterface &$form): bool;

    public function handle(FormInterface &$form, Request $request): FormDataStatus 
    {
        if (!$form->isSubmitted()) {
            return FormDataStatus::NotSubmitted;
        }

        if ($form->isValid()) {
            return FormDataStatus::Valid;
        }

        else return FormDataStatus::Invalid;
    }
    
}
