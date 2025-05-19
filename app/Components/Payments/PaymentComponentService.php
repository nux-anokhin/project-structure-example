<?php

declare(strict_types=1);

namespace Example\Components\Payments;

use Example\Components\Payments\Models\PaymentModel;
use Example\Components\Payments\Services\PaymentService;

final class PaymentComponentService implements PaymentComponentInterface
{
    public function __construct(
        private readonly PaymentService $paymentService
    ) {
    }

    public function getPaymentById(int $id): ?PaymentModel
    {
        return $this->paymentService->getById($id);
    }
}