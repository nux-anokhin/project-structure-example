<?php

declare(strict_types=1);

namespace Example\Modules\Bonuses\Events;

abstract class AbstractBonusEvent implements BonusEventInterface
{
    public function __construct(
        private readonly array $data
    ) {
    }

    abstract public function getName(): string;

    public function getData(): array
    {
        return $this->data;
    }
}