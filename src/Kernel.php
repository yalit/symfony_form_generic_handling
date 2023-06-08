<?php

namespace App;

use App\DependencyInjection\FormDataHandlerCompilerPass;
use App\DependencyInjection\FormDisplayHandlerCompilerPass;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function build(ContainerBuilder $container): void
    {
        $container->addCompilerPass(new FormDataHandlerCompilerPass());
        $container->addCompilerPass(new FormDisplayHandlerCompilerPass());
    }

}
