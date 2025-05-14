<?php

declare(strict_types=1);

namespace Example\Modules\Basic\Repositories\Criteria;

use Illuminate\Database\Query\Builder;

interface FindCriteriaInterface
{
    public function apply(Builder $queryBuilder): Builder;
}