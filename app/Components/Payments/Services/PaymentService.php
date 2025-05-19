<?php

declare(strict_types=1);

namespace Example\Components\Payments\Services;

use Example\Components\Payments\Models\PaymentModel;
use Example\Components\Payments\Repositories\PaymentRepository;

readonly class PaymentService
{
    public function __construct(
        private PaymentRepository $paymentRepository
    ) {
    }

    public function getById(int $id): ?PaymentModel
    {
        return null;
    }
}