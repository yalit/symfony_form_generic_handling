<?php

declare(strict_types=1);

namespace App\DependencyInjection;

use Symfony\Component\DependencyInjection\Reference;
use App\FormHandling\FormDisplay\FormDisplayHandlerManager;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

final class FormDisplayHandlerCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        $formDisplayHandlerManagerDefinition = $container->getDefinition(FormDisplayHandlerManager::class);
        $formDisplayHandlerTaggedIds = $container->findTaggedServiceIds('app.form.displayHandler');
        
        foreach ($formDisplayHandlerTaggedIds as $id => $tag) {
            $formDisplayHandlerManagerDefinition->addMethodCall('addHandler', [new Reference($id)]);
        }
    }
}