<?php

namespace Example\Modules\Basic\EventListeners;

use Example\Modules\Basic\Events\EventInterface;

interface EventListenerInterface
{
    public function handle(EventInterface $event);
}