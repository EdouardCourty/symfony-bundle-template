<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

// Services are wired explicitly on purpose: no autowire()/autoconfigure() defaults.
// Register each service with ->set(Class::class)->arg('$name', ...) and ->tag(...).
return static function (ContainerConfigurator $container): void {
    $container->services();
};
