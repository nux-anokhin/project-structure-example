<?php

declare(strict_types=1);

namespace Example\Modules\Bonuses\Repositories;

use Example\Modules\Basic\Models\ModelInterface;
use Example\Modules\Basic\Repositories\Criteria\FindCriteriaInterface;
use Example\Modules\Basic\Repositories\RepositoryInterface;
use Example\Modules\Bonuses\Models\BonusSettingsModel;
use Illuminate\Support\Collection;

final class BonusSettingRepository implements RepositoryInterface
{
    public function getOneByCriteria(FindCriteriaInterface $criteria): ?BonusSettingsModel
    {
        // TODO: Implement getOne() method.
    }

    /**
     * @return Collection<BonusSettingsModel>
     */
    public function getAllByCriteria(FindCriteriaInterface $criteria): Collection
    {
        // TODO: Implement getAll() method.
    }

    /**
     * @param BonusSettingsModel $model
     */
    public function update(ModelInterface $model): BonusSettingsModel
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
    }
}