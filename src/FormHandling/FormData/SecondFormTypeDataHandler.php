<?php

declare(strict_types=1);

namespace App\FormHandling\FormData;

use App\Form\SecondFormType;
use Symfony\Component\Form\FormInterface;

final class SecondFormTypeDataHandler extends AbstractFormDataHandler
{
    public function supports(FormInterface &$form): bool 
    { 
        return $form->getConfig()->getType()->getInnerType() instanceof SecondFormType;
    }
}
