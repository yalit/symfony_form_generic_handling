<?php

declare(strict_types=1);

namespace App\FormHandling\FormData;

use Symfony\Component\Form\Test\FormInterface;
use Symfony\Component\HttpFoundation\Request;

interface FormDataHandlerManagerInterface 
{
    public function addHandler(FormDataHandlerInterface $formDataHandler): void;
    public function handle(FormInterface &$form, Request $request): FormDataStatus;
}