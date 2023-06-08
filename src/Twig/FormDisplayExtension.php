<?php

declare(strict_types=1);

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use App\FormHandling\FormDisplay\FormDisplayHandlerManagerInterface;
use Symfony\Component\Form\FormView;
use Twig\TwigFunction;

final class FormDisplayExtension extends AbstractExtension 
{
    public function __construct(private readonly FormDisplayHandlerManagerInterface $formDisplayHandler)
    {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('displayForm', [$this, 'displayForm'], ['is_safe' =>['html']]),
        ];
    }

    public function displayForm(FormView $form, array $options = []): string
    {
        return $this->formDisplayHandler->display($form, $options);
    }
}
