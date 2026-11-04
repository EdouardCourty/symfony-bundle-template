<?php

declare(strict_types=1);

namespace Ecourty\TemplateBundle\Tests\Functional;

use Ecourty\TemplateBundle\TemplateBundle;
use Ecourty\TemplateBundle\Tests\App\TestKernel;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class BundleBootTest extends KernelTestCase
{
    protected static function getKernelClass(): string
    {
        return TestKernel::class;
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        restore_exception_handler();
    }

    public function testKernelBootsWithBundleRegistered(): void
    {
        $kernel = self::bootKernel();

        self::assertArrayHasKey('TemplateBundle', $kernel->getBundles());
        self::assertInstanceOf(TemplateBundle::class, $kernel->getBundle('TemplateBundle'));
    }
}
