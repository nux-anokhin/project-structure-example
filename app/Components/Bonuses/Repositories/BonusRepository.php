<?php

declare(strict_types=1);

namespace Example\Modules\Bonuses\Repositories;

use Example\Modules\Basic\Models\ModelInterface;
use Example\Modules\Basic\Repositories\Criteria\FindCriteriaInterface;
use Example\Modules\Basic\Repositories\RepositoryInterface;
use Example\Modules\Bonuses\Models\BonusModel;
use Illuminate\Support\Collection;

final class BonusRepository implements RepositoryInterface
{
    public function getOneByCriteria(FindCriteriaInterface $criteria): ?BonusModel
    {
        // TODO: Implement getOne() method.
    }

    /**
     * @return Collection<BonusModel>
     */
    public function getAllByCriteria(FindCriteriaInterface $criteria): Collection
    {
        // TODO: Implement getAll() method.
    }

    public function create(BonusDto $dto): BonusModel
    {

    }

    /**
     * @param BonusModel $model
     */
    public function update(ModelInterface $model): BonusModel
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
    }
}