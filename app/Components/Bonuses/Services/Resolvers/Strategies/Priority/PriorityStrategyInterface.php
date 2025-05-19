<?php

declare(strict_types=1);

namespace Example\Components\Bonuses\Services\Resolvers\Strategies\Priority;

interface PriorityStrategyInterface
{
    public function resolve(array $data): int;
}