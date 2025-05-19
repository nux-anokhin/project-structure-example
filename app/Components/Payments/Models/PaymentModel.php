<?php

declare(strict_types=1);

namespace Example\Components\Payments\Models;

class PaymentModel
{
    private int $id;

    public function getId(): int
    {
        return $this->id;
    }
}