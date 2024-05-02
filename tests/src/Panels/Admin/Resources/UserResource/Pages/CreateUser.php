<?php

namespace SaKanjo\FilamentResetAction\Tests\Panels\Admin\Resources\UserResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use SaKanjo\FilamentResetAction\Actions\ResetAction;
use SaKanjo\FilamentResetAction\Tests\Panels\Admin\Resources\UserResource;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ResetAction::make(),
        ];
    }
}
