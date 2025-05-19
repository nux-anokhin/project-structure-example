<?php

declare(strict_types=1);

namespace Example\Components\Bonuses\Models;

use Example\Components\Basic\Models\ModelInterface;

class BonusModel implements ModelInterface
{
    public const string FIELD_ID = 'id';
    public const string FIELD_TYPE = 'type';
    public const string FIELD_AMOUNT = 'amount';

    private int $id;
    private string $type;
    private float $amount;

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function enrichByData(array $data): self
    {
        if (isset($data[self::FIELD_ID])) {
            $this->id = (int) $data[self::FIELD_ID];
        }
        if (isset($data[self::FIELD_TYPE])) {
            $this->type = (string) $data[self::FIELD_TYPE];
        }
        if (isset($data[self::FIELD_AMOUNT])) {
            $this->amount = (float) $data[self::FIELD_AMOUNT];
        }

        return $this;
    }
}