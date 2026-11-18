<?php

declare(strict_types=1);

namespace MageOS\B2BCompany\Model;

use MageOS\B2BCompany\Api\CompanyProviderInterface;

class CompanyProvider implements CompanyProviderInterface
{
    public function __construct(
        private readonly string $name = 'Example Company',
        private readonly float $discountPercent = 10.0
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDiscountPercent(): float
    {
        return $this->discountPercent;
    }
}
