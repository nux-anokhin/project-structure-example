<?php

declare(strict_types=1);

namespace Example\Components\Bonuses\Repositories;

use Example\Components\Basic\Dtos\DtoInterface;
use Example\Components\Basic\Models\ModelInterface;
use Example\Components\Basic\Repositories\Criteria\FindCriteriaInterface;
use Example\Components\Basic\Repositories\RepositoryInterface;
use Example\Components\Bonuses\Dtos\BonusDto;
use Example\Components\Bonuses\Models\BonusSettingModel;
use Illuminate\Support\Collection;

final class BonusSettingRepository implements RepositoryInterface
{
    public function getOneByCriteria(FindCriteriaInterface $criteria): ?BonusSettingModel
    {
        return null;
    }

    /**
     * @return Collection<BonusSettingModel>
     */
    public function getAllByCriteria(FindCriteriaInterface $criteria): Collection
    {
        return new Collection();
    }

    /**
     * @param BonusDto $dto
     */
    public function create(DtoInterface $dto): BonusSettingModel
    {
        return new BonusSettingModel();
    }

    /**
     * @param BonusSettingModel $model
     */
    public function update(ModelInterface $model): BonusSettingModel
    {
        return new BonusSettingModel();
    }

    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
    }
}