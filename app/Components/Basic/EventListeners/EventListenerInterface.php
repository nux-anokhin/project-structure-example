<?php

namespace Example\Components\Basic\EventListeners;

use Example\Components\Basic\Events\EventInterface;

interface EventListenerInterface
{
    public function handle(EventInterface $event);
}