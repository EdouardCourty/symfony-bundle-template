<?php

declare(strict_types=1);

namespace Ecourty\TemplateBundle\Tests\Unit\DependencyInjection;

use Ecourty\TemplateBundle\DependencyInjection\Configuration;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Definition\Processor;

final class ConfigurationTest extends TestCase
{
    public function testEmptyConfigurationIsValid(): void
    {
        $config = (new Processor())->processConfiguration(new Configuration(), []);

        self::assertSame([], $config);
    }

    public function testRootNodeIsNamedTemplate(): void
    {
        $treeBuilder = (new Configuration())->getConfigTreeBuilder();

        self::assertSame('template', $treeBuilder->buildTree()->getName());
    }
}
