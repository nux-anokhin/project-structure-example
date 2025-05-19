<?php

declare(strict_types=1);

namespace Example\Components\Bonuses\Repositories\Criteria\Bonus;

use Example\Components\Basic\Repositories\Criteria\FindCriteriaInterface;
use Example\Components\Bonuses\Models\BonusModel;
use Illuminate\Database\Query\Builder;

final readonly class FindBonusByIdCriteria implements FindCriteriaInterface
{
    public function __construct(
        private int $id
    ) {
    }

    public function apply(Builder $queryBuilder): Builder
    {
        return $queryBuilder->where(BonusModel::FIELD_ID, $this->id);
    }
}