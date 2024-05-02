<?php

namespace SaKanjo\FilamentResetAction\Actions;

use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\EditRecord;

class ResetAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'reset';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $icon = config('filament-reset-action.icon');
        $color = config('filament-reset-action.color');

        $this
            ->icon($icon)
            ->hiddenLabel()
            ->color($color)
            ->action($this->reset(...));
    }

    protected function reset(CreateRecord|EditRecord $livewire): void
    {
        if ($livewire instanceof CreateRecord) {
            $livewire->form->fill();
        } else {
            $data = $livewire->getRecord()->attributesToArray();

            $livewire->form->fill($data);
        }
    }
}
