<?php

declare(strict_types=1);

namespace Example\Components\Segmentations;

use Example\Components\Bonuses\BonusComponentService;
use Example\Components\Bonuses\BonusComponentInterface;
use Illuminate\Support\ServiceProvider;

class SegmentationServiceProvider extends ServiceProvider
{
    public const string MODULE_NAME = 'segmentation';

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerServices();
        $this->loadRoutes();
        $this->loadViews();
    }

    public function registerServices(): void
    {
        $this->app->bind(BonusComponentInterface::class, BonusComponentService::class);
    }

    public function loadRoutes(): void
    {
        $fileNames = [
            'admin',
            'api',
            'callback',
        ];

        foreach ($fileNames as $fileName) {
            $this->loadRoutesFrom(sprintf('%s/Routes/%s.php', __DIR__, $fileName));
        }
    }

    protected function loadViews(): void
    {
        $this->loadViewsFrom(
            [
                sprintf('%s/Resources/views/%s',
                    __DIR__
                )
            ],
            self::MODULE_NAME
        );
    }
}