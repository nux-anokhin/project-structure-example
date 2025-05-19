<?php

declare(strict_types=1);

namespace Example\Components\Bonuses\Services;

use Example\Components\Bonuses\Models\BonusModel;
use Example\Components\Bonuses\Repositories\BonusRepository;
use Example\Components\Bonuses\Repositories\Criteria\Bonus\FindBonusByIdCriteria;
use Example\Components\Bonuses\Repositories\Criteria\Bonus\FindBonusByTypeCriteria;
use Example\Components\Bonuses\Services\Resolvers\BonusPriorityResolver;
use Example\Components\Bonuses\Services\Resolvers\Strategies\Priority\PriorityStrategyA;
use Example\Components\Bonuses\Services\Resolvers\Strategies\Priority\PriorityStrategyB;
use Example\Components\Bonuses\Services\Resolvers\Strategies\Priority\PriorityStrategyC;
use Example\Components\Payments\Models\PaymentModel;
use Example\Components\Payments\PaymentComponentInterface;
use InvalidArgumentException;

/**
 * Notice: Communication with other modules should be only via Component service like in case with API
 */
class BonusService
{
    public function __construct(
        private readonly BonusRepository $bonusRepository,
        private readonly PaymentComponentInterface $paymentComponent
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

    public function doesBonusCanBeAssignedAfterPayment(BonusModel $bonusModel, PaymentModel $paymentModel): bool
    {
        $payment = $this->paymentComponent->getPaymentById($paymentModel->getId());
        if ($payment) {
            // Some specific logic

            return true;
        }

        return false;
    }
}