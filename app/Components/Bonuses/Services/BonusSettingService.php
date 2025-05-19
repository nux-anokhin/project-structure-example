<?php

declare(strict_types=1);

namespace Example\Components\Bonuses\Services;

use Example\Components\Bonuses\Models\BonusSettingModel;
use Example\Components\Bonuses\Repositories\BonusSettingRepository;
use Example\Components\Bonuses\Repositories\Criteria\Bonus\FindBonusByIdCriteria;

readonly class BonusSettingService
{
    public function __construct(
        private BonusSettingRepository $bonusSettingRepository
    ) {
    }

    public function getById(int $id): ?BonusSettingModel
    {
        $criteria = new FindBonusByIdCriteria($id);

        return $this->bonusSettingRepository->getOneByCriteria($criteria);
    }
}