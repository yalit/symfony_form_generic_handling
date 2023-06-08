<?php

declare(strict_types=1);

namespace App\FormHandling\FormData;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpFoundation\Request;
use App\FormHandling\FormData\FormDataHandlerInterface;

final class FormDataHandlerManager implements FormDataHandlerManagerInterface
{
    /**
     * @var FormDataHandlerInterface[] $formDataHandlers
     */
    private array $formDataHandlers = [];
    
    public function addHandler(FormDataHandlerInterface $formDataHandler): void
    {
        $this->formDataHandlers[] = $formDataHandler;
    }

    public function handle(FormInterface &$form, Request $request): FormDataStatus
    {
        foreach($this->formDataHandlers as $formDataHandler) {
            if ($formDataHandler->supports($form)) {
                return $formDataHandler->handle($form, $request);
            }
        }

        throw new NoFormDataHandlerExistingException($form::class);
    }
}