<?php

declare(strict_types=1);

namespace App\DependencyInjection;

use Symfony\Component\DependencyInjection\Reference;
use App\FormHandling\FormData\FormDataHandlerManager;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

final class FormDataHandlerCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        $formDataHandlerManagerDefinition = $container->getDefinition(FormDataHandlerManager::class);
        $formDataHandlerTaggedIds = $container->findTaggedServiceIds('app.form.dataHandler');

        foreach ($formDataHandlerTaggedIds as $id => $tag) {
            $formDataHandlerManagerDefinition->addMethodCall('addHandler', [new Reference($id)]);
        }
    }
}