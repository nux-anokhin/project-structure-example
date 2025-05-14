<?php

declare(strict_types=1);

namespace Example\Modules\Basic\Events;

interface EventInterface
{
    public function getName(): string;

    public function getData(): array;
}