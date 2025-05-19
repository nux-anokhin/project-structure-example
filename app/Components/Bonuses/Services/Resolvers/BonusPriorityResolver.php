<?php

declare(strict_types=1);

namespace Example\Components\Bonuses\Services\Resolvers;

use Example\Components\Bonuses\Services\Resolvers\Strategies\Priority\PriorityStrategyInterface;

readonly class BonusPriorityResolver
{
    public function __construct(
        private PriorityStrategyInterface $strategy
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