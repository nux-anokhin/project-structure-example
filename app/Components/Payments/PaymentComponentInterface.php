<?php

declare(strict_types=1);

namespace Example\Components\Payments;

use Example\Components\Bonuses\Models\BonusModel;
use Example\Components\Bonuses\Models\BonusSettingModel;
use Example\Components\Payments\Models\PaymentModel;

/**
 * Entry point to `Payment` component
 */
interface PaymentComponentInterface
{
    public function getPaymentById(int $id): ?PaymentModel;
}