<?php

declare(strict_types=1);

namespace MageOS\B2BCompany\Api;

interface CompanyProviderInterface
{
    public function getName(): string;

    public function getDiscountPercent(): float;
}
