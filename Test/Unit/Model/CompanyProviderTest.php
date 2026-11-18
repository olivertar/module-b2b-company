<?php

declare(strict_types=1);

namespace MageOS\B2BCompany\Test\Unit\Model;

use MageOS\B2BCompany\Model\CompanyProvider;
use PHPUnit\Framework\TestCase;

class CompanyProviderTest extends TestCase
{
    public function testItReturnsTheConfiguredCompany(): void
    {
        $provider = new CompanyProvider('Acme', 15.0);

        self::assertSame('Acme', $provider->getName());
        self::assertSame(15.0, $provider->getDiscountPercent());
    }
}
