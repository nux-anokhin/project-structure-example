<?php

declare(strict_types=1);

namespace Example\Modules\Bonuses\Services\Resolvers;

use Example\Modules\Bonuses\Services\Resolvers\Strategies\Priority\PriorityStrategyInterface;

class BonusPriorityResolver
{
    public function __construct(
        private readonly PriorityStrategyInterface $strategy
    ) {
    }

    public function resolveByPriority(array $data): int
    {
        // Some additional logic can be here

        $strategyResult = $this->strategy->resolve($data);

        // Some additional logic can be here

        return $strategyResult;
    }
}