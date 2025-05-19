<?php

declare(strict_types=1);

namespace Example\Components\Bonuses\Repositories;

use Example\Components\Basic\Dtos\DtoInterface;
use Example\Components\Basic\Models\ModelInterface;
use Example\Components\Basic\Repositories\Criteria\FindCriteriaInterface;
use Example\Components\Basic\Repositories\RepositoryInterface;
use Example\Components\Bonuses\Dtos\BonusDto;
use Example\Components\Bonuses\Models\BonusModel;
use Illuminate\Support\Collection;

final class BonusRepository implements RepositoryInterface
{
    public function getOneByCriteria(FindCriteriaInterface $criteria): ?BonusModel
    {
        return null;
    }

    /**
     * @return Collection<BonusModel>
     */
    public function getAllByCriteria(FindCriteriaInterface $criteria): Collection
    {
        return new Collection();
    }

    /**
     * @param BonusDto $dto
     */
    public function create(DtoInterface $dto): BonusModel
    {
        return new BonusModel();
    }

    /**
     * @param BonusModel $model
     */
    public function update(ModelInterface $model): BonusModel
    {
        return new BonusModel();
    }

    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
    }
}