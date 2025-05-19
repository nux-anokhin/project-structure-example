<?php

declare(strict_types=1);

namespace Example\Components\Bonuses;

use Example\Components\Bonuses\Models\BonusModel;
use Example\Components\Bonuses\Models\BonusSettingModel;

/**
 * Entry point to `Bonus` component
 */
interface BonusComponentInterface
{
    public function getBonusById(int $id): ?BonusModel;

    public function getBonusByType(string $type): ?BonusModel;

    public function getBonusPriorityByCondition(string $condition, array $data = []): int;

    public function getBonusSettingById(int $id): BonusSettingModel;
}