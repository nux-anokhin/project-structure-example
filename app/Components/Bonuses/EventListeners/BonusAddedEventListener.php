<?php

declare(strict_types=1);

namespace Example\Components\Bonuses\EventListeners;

use Example\Components\Basic\EventListeners\EventListenerInterface;
use Example\Components\Basic\Events\EventInterface;
use Example\Components\Bonuses\Events\BonusAddedEvent;

final class BonusAddedEventListener implements EventListenerInterface
{
    /**
     * @param BonusAddedEvent $event
     */
    public function handle(EventInterface $event)
    {
        // TODO: Implement handle() method.
    }
}