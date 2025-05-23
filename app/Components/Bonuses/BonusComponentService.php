<?php

declare(strict_types=1);

namespace Example\Components\Bonuses;

use Example\Components\Bonuses\Models\BonusModel;
use Example\Components\Bonuses\Models\BonusSettingModel;
use Example\Components\Bonuses\Services\BonusService;
use Example\Components\Bonuses\Services\BonusSettingService;

final readonly class BonusComponentService implements BonusComponentInterface
{
    public function __construct(
        private BonusService $bonusService,
        private BonusSettingService $bonusSettingService
    ) {
    }

    public function getBonusById(int $id): ?BonusModel
    {
        return $this->bonusService->getById($id);
    }

    public function getBonusByType(string $type): ?BonusModel
    {
        return $this->bonusService->getByType($type);
    }

    public function getBonusPriorityByCondition(string $condition, array $data = []): int
    {
        return $this->bonusService->getBonusPriorityByCondition($condition, $data);
    }

    public function getBonusSettingById(int $id): BonusSettingModel
    {
        return $this->bonusSettingService->getById($id);
    }
}