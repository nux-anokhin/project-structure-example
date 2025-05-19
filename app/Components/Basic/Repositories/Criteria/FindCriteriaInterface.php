<?php

declare(strict_types=1);

namespace Example\Components\Basic\Repositories\Criteria;

use Illuminate\Database\Query\Builder;

interface FindCriteriaInterface
{
    public function apply(Builder $queryBuilder): Builder;
}