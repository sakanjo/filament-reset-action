<?php

namespace SaKanjo\FilamentResetAction\Tests\Panels\Admin\Resources\UserResource\Pages;

use Filament\Resources\Pages\ListRecords;
use SaKanjo\FilamentResetAction\Tests\Panels\Admin\Resources\UserResource;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;
}
