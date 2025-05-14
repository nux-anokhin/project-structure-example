<?php

declare(strict_types=1);

namespace Example\Modules\Bonuses\Services\Resolvers\Strategies\Priority;

class PriorityStrategyC implements PriorityStrategyInterface
{
    public function resolve(array $data): int
    {
        // Custom logic for Strategy C
        return 3;
    }
}