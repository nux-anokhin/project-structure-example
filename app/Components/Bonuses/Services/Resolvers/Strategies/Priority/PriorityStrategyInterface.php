<?php

declare(strict_types=1);

namespace Example\Modules\Bonuses\Services\Resolvers\Strategies\Priority;

interface PriorityStrategyInterface
{
    public function resolve(array $data): int;
}