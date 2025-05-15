<?php

declare(strict_types=1);

namespace Example\Modules\Bonuses\EventListeners;

use Example\Modules\Basic\EventListeners\EventListenerInterface;
use Example\Modules\Basic\Events\EventInterface;
use Example\Modules\Bonuses\Events\BonusAddedEvent;

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