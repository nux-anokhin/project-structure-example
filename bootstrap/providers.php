<?php

use Example\Components\Bonuses\BonusServiceProvider;
use Example\Components\Payments\PaymentServiceProvider;
use Example\Components\Segmentations\SegmentationServiceProvider;

return [
    BonusServiceProvider::class,
    PaymentServiceProvider::class,
    SegmentationServiceProvider::class,
];