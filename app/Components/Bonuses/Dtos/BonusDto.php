<?php

declare(strict_types=1);

namespace Example\Components\Bonuses\Dtos;

use Example\Components\Basic\Dtos\DtoInterface;
use Example\Components\Bonuses\Models\BonusModel;

class BonusDto implements DtoInterface
{
    public const string FIELD_ID = BonusModel::FIELD_ID;
    public const string FIELD_TYPE = BonusModel::FIELD_TYPE;
    public const string FIELD_AMOUNT = BonusModel::FIELD_AMOUNT;

    public function __construct(
        private ?int $id = null,
        private ?string $type = null,
        private ?float $amount = null
    ) {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function toArray(): array
    {
        return [
            self::FIELD_ID => $this->id,
            self::FIELD_TYPE => $this->type,
            self::FIELD_AMOUNT => $this->amount,
        ];
    }
}