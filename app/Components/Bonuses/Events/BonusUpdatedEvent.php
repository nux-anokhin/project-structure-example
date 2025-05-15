<?php

declare(strict_types=1);

namespace Example\Modules\Bonuses\Events;

final class BonusUpdatedEvent extends AbstractBonusEvent
{
    private const string EVENT_NAME = 'bonus_updated';

    public function getName(): string
    {
        return self::EVENT_NAME;
    }
}