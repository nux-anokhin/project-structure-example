<?php

declare(strict_types=1);

namespace Example\Modules\Bonuses\Repositories\Criteria;

use Example\Modules\Basic\Repositories\Criteria\FindCriteriaInterface;
use Example\Modules\Bonuses\Models\BonusModel;
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