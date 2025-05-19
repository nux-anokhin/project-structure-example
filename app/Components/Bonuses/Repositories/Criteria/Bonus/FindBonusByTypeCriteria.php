<?php

declare(strict_types=1);

namespace Example\Components\Bonuses\Repositories\Criteria\Bonus;

use Example\Components\Basic\Repositories\Criteria\FindCriteriaInterface;
use Example\Components\Bonuses\Models\BonusModel;
use Illuminate\Database\Query\Builder;

final readonly class FindBonusByTypeCriteria implements FindCriteriaInterface
{
    public function __construct(
        private string $type
    ) {
    }

    public function apply(Builder $queryBuilder): Builder
    {
        return $queryBuilder->where(BonusModel::FIELD_TYPE, $this->type);
    }
}