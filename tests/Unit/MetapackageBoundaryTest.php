<?php

declare(strict_types=1);

namespace Symfinity\UxBlocksFull\Tests\Unit;

use PHPUnit\Framework\TestCase;

final class MetapackageBoundaryTest extends TestCase
{
    private const REQUIRED_TIERS = [
        'symfinity/ux-blocks-core',
        'symfinity/ux-blocks-form',
        'symfinity/ux-blocks-extended',
        'symfinity/ux-blocks-interactive',
        'symfinity/ux-blocks-live',
    ];

    private const FORBIDDEN_PACKAGES = [
        'symfinity/ui-kernel',
        'symfinity/ui-action',
        'symfinity/ux-runtime',
        'symfinity/ux-blocks-lab',
        'symfinity/ux-blocks-kiosk',
    ];

    private const ALLOWED_SUGGESTS = [
        'symfinity/ux-blocks-marketing',
        'symfinity/ux-blocks-ecommerce',
    ];

    /** @var array<string, mixed> */
    private array $composer;

    protected function setUp(): void
    {
        $path = dirname(__DIR__, 2).'/composer.json';
        $raw = file_get_contents($path);
        self::assertIsString($raw);
        $decoded = json_decode($raw, true, 512, JSON_THROW_ON_ERROR);
        self::assertIsArray($decoded);
        /** @var array<string, mixed> $composer */
        $composer = $decoded;
        $this->composer = $composer;
    }

    public function testTypeIsMetapackage(): void
    {
        self::assertSame('metapackage', $this->composer['type'] ?? null);
    }

    public function testRequireListsAllFiveTierPackages(): void
    {
        $require = $this->composer['require'] ?? [];
        self::assertIsArray($require);

        foreach (self::REQUIRED_TIERS as $package) {
            self::assertArrayHasKey($package, $require, sprintf('Missing require entry for %s', $package));
            self::assertSame('^0.1', $require[$package]);
        }

        $tierRequires = array_values(array_filter(
            array_keys($require),
            static fn (string $name): bool => str_starts_with($name, 'symfinity/ux-blocks-'),
        ));
        self::assertEqualsCanonicalizing(self::REQUIRED_TIERS, $tierRequires);
    }

    public function testMustNotRequireKernelRuntimeOrShowroomPackages(): void
    {
        $sections = [
            'require' => $this->composer['require'] ?? [],
            'suggest' => $this->composer['suggest'] ?? [],
        ];

        foreach ($sections as $section => $packages) {
            self::assertIsArray($packages);
            foreach (self::FORBIDDEN_PACKAGES as $forbidden) {
                self::assertArrayNotHasKey(
                    $forbidden,
                    $packages,
                    sprintf('%s must not list %s', $section, $forbidden),
                );
            }
        }
    }

    public function testSuggestOnlyMarketingAndEcommerceVerticals(): void
    {
        $suggest = $this->composer['suggest'] ?? [];
        self::assertIsArray($suggest);
        self::assertSame(self::ALLOWED_SUGGESTS, array_keys($suggest));
    }

    public function testHasDocsHomepageOrSupportDocs(): void
    {
        $homepage = $this->composer['homepage'] ?? null;
        $hasHomepage = is_string($homepage) && '' !== trim($homepage);

        $support = $this->composer['support'] ?? null;
        $supportDocs = is_array($support) ? ($support['docs'] ?? null) : null;
        $hasSupportDocs = is_string($supportDocs) && '' !== trim($supportDocs);

        self::assertTrue($hasHomepage || $hasSupportDocs);
    }
}
