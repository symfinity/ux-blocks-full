<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksFull\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class MetapackageTest extends TestCase
{
    #[Test]
    public function composerJsonRequiresFourTierCatalog(): void
    {
        $path = \dirname(__DIR__) . '/composer.json';
        $json = json_decode((string) file_get_contents($path), true, 512, JSON_THROW_ON_ERROR);

        self::assertSame('metapackage', $json['type'] ?? null);
        self::assertArrayHasKey('symfinity/ux-blocks-core', $json['require'] ?? []);
        self::assertArrayHasKey('symfinity/ux-blocks-extended', $json['require'] ?? []);
        self::assertArrayHasKey('symfinity/ux-blocks-interactive', $json['require'] ?? []);
        self::assertArrayHasKey('symfinity/ux-blocks-live', $json['suggest'] ?? []);
        self::assertArrayNotHasKey('symfinity/ux-blocks-live', $json['require'] ?? []);
    }
}
