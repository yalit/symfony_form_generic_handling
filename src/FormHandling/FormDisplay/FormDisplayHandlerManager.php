<?php

declare(strict_types=1);

namespace App\FormHandling\FormDisplay;

use Symfony\Component\Form\FormView;

final class FormDisplayHandlerManager implements FormDisplayHandlerManagerInterface
{
    /**
     * 
     * @var FormDisplayHandlerInterface[]
     */
    private array $formDisplayHandlers = [];

    public function addHandler(FormDisplayHandlerInterface $formDisplayHandler): void 
    { 
        $this->formDisplayHandlers[] = $formDisplayHandler;
    }

    public function display(FormView $form, array $options = []): string 
    { 
        foreach($this->formDisplayHandlers as $formDisplayHandler) {
            if($formDisplayHandler->supports($form)) {
                return $formDisplayHandler->display($form, $options);
            }
        }

        return 'No handler found';
    }
    
}
