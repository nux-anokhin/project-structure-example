<?php

declare(strict_types=1);

namespace Example\Modules\Bonuses\Services;

use Example\Modules\Bonuses\Models\BonusModel;
use Example\Modules\Bonuses\Repositories\BonusRepository;
use Example\Modules\Bonuses\Repositories\Criteria\FindBonusByIdCriteria;
use Example\Modules\Bonuses\Repositories\Criteria\FindBonusByTypeCriteria;
use Example\Modules\Bonuses\Services\Resolvers\BonusPriorityResolver;
use Example\Modules\Bonuses\Services\Resolvers\Strategies\Priority\PriorityStrategyA;
use Example\Modules\Bonuses\Services\Resolvers\Strategies\Priority\PriorityStrategyB;
use Example\Modules\Bonuses\Services\Resolvers\Strategies\Priority\PriorityStrategyC;
use InvalidArgumentException;

class BonusService
{
    public function __construct(
        private readonly BonusRepository $bonusRepository
    ) {
    }

    public function getById(int $id): ?BonusModel
    {
        $criteria = new FindBonusByIdCriteria($id);

        return $this->bonusRepository->getOneByCriteria($criteria);
    }

    public function getByType(string $type): ?BonusModel
    {
        $criteria = new FindBonusByTypeCriteria($type);

        return $this->bonusRepository->getOneByCriteria($criteria);
    }

    /**
     * @throws InvalidArgumentException
     */
    public function getBonusPriorityByCondition(string $condition, array $data = []): int
    {
        $strategy = match($condition) {
            'A' => new PriorityStrategyA(),
            'B' => new PriorityStrategyB(),
            'C' => new PriorityStrategyC(),
            default => throw new InvalidArgumentException('Invalid strategy'),
        };

        return (new BonusPriorityResolver($strategy))->resolveByPriority($data);
    }
}