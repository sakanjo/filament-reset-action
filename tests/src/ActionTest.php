<?php

use Livewire\Livewire;
use SaKanjo\FilamentResetAction\Tests\Models\User;
use SaKanjo\FilamentResetAction\Tests\Panels\Admin\Resources\UserResource\Pages;

use function Pest\Livewire\livewire;

it('reset forms correctly on create page', function () {
    Livewire::test(Pages\CreateUser::class)
        ->fillForm([
            'name' => 'Salah Kanjo',
            'email' => 'dev.salah.kanjo@gmail.com',
        ])
        ->callAction('reset')
        ->assertSchemaStateSet([
            'name' => null,
            'email' => null,
        ]);
});

it('reset forms correctly on edit page', function () {
    $user = User::factory()->create();

    livewire(Pages\EditUser::class, [
        'record' => $user->getKey(),
    ])
        ->fillForm([
            'name' => 'Salah Kanjo',
            'email' => 'dev.salah.kanjo@gmail.com',
        ])
        ->callAction('reset')
        ->assertSchemaStateSet([
            'name' => $user->name,
            'email' => $user->email,
        ]);
});
