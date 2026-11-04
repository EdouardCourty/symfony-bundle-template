<?php

declare(strict_types=1);

namespace Ecourty\TemplateBundle\Tests\Integration;

use Ecourty\TemplateBundle\DependencyInjection\TemplateExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class TemplateExtensionTest extends TestCase
{
    public function testLoadWithEmptyConfiguration(): void
    {
        $container = new ContainerBuilder();
        $extension = new TemplateExtension();

        $extension->load([], $container);

        self::assertSame('template', $extension->getAlias());
    }
}
