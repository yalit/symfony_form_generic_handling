<?php

declare(strict_types=1);

namespace App\FormHandling\FormData;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

interface FormDataHandlerInterface
{
    public function supports(FormInterface &$form): bool;
    public function handle(FormInterface &$form, Request $request): FormDataStatus;
}
