<?php

declare(strict_types=1);

namespace Example\Modules\Basic\Repositories;

use Example\Modules\Basic\Dtos\DtoInterface;
use Example\Modules\Basic\Models\ModelInterface;
use Example\Modules\Basic\Repositories\Criteria\FindCriteriaInterface;
use Illuminate\Support\Collection;

interface RepositoryInterface
{
    public function getOneByCriteria(FindCriteriaInterface $criteria): ?ModelInterface;

    /**
     * @return Collection<ModelInterface>
     */
    public function getAllByCriteria(FindCriteriaInterface $criteria): Collection;

    public function create(DtoInterface $dto): ModelInterface;

    public function update(ModelInterface $model): ModelInterface;

    public function delete(int $id): void;
}