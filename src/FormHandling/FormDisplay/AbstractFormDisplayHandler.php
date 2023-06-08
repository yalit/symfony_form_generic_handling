<?php

declare(strict_types=1);

namespace App\FormHandling\FormDisplay;

use Twig\Environment;
use Symfony\Component\Form\FormView;
use App\FormHandling\FormDisplay\FormDisplayHandlerInterface;

abstract class AbstractFormDisplayHandler implements FormDisplayHandlerInterface
{
    public function __construct(protected readonly Environment $twig)
    {
        
    }

    abstract public function supports(FormView $form): bool;
    public function display(FormView $form, array $options = []): string 
    {
        return $this->twig->render('form/base.html.twig', array_merge(
                ['form' => $form], 
                $options
            )
        );
    }
}
