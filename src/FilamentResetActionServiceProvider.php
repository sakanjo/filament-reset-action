<?php

namespace SaKanjo\FilamentResetAction;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentResetActionServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-reset-action';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile()
            ->hasInstallCommand(fn (InstallCommand $command) => $command
                ->publishConfigFile()
                ->askToStarRepoOnGitHub('sakanjo/filament-reset-action')
            );
    }
}
