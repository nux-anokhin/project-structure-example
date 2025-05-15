<?php

declare(strict_types=1);

namespace Example\Modules\Bonuses\Services\Resolvers\Strategies\Priority;

class PriorityStrategyB implements PriorityStrategyInterface
{
    public function resolve(array $data): int
    {
        // Custom logic for Strategy B
        return 2;
    }
}