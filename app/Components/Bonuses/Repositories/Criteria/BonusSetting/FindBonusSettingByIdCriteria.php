<?php

declare(strict_types=1);

namespace Example\Components\Bonuses\Repositories\Criteria\BonusSetting;

use Example\Components\Basic\Repositories\Criteria\FindCriteriaInterface;
use Example\Components\Bonuses\Models\BonusSettingModel;
use Illuminate\Database\Query\Builder;

final readonly class FindBonusSettingByIdCriteria implements FindCriteriaInterface
{
    public function __construct(
        private int $id
    ) {
    }

    public function apply(Builder $queryBuilder): Builder
    {
        return $queryBuilder->where(BonusSettingModel::FIELD_ID, $this->id);
    }
}