<?php

declare(strict_types=1);

namespace Example\Modules\Bonuses\Models;

use Example\Modules\Basic\Models\ModelInterface;

class BonusSettingsModel implements ModelInterface
{
    public const string FIELD_ID = 'id';
    public const string FIELD_BONUS_ID = 'bonus_id';
    public const string FIELD_ACTIVE = 'active';

    private int $id;
    private int $bonusId;
    private bool $active;

    public function getId(): int
    {
        return $this->id;
    }

    public function getBonusId(): int
    {
        return $this->bonusId;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function enrichByData(array $data): self
    {
        if (isset($data[self::FIELD_ID])) {
            $this->id = (int) $data[self::FIELD_ID];
        }
        if (isset($data[self::FIELD_BONUS_ID])) {
            $this->bonusId = (int) $data[self::FIELD_BONUS_ID];
        }
        if (isset($data[self::FIELD_ACTIVE])) {
            $this->active = (bool) $data[self::FIELD_ACTIVE];
        }

        return $this;
    }
}