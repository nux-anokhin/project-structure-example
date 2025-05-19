<?php

declare(strict_types=1);

namespace Example\Components\Bonuses\Events;

final class BonusDeletedEvent extends AbstractBonusEvent
{
    private const string EVENT_NAME = 'bonus_deleted';

    public function getName(): string
    {
        return self::EVENT_NAME;
    }
}