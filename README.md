<h1 align="center">↻ Filament reset action</h1>

<p align="center">
    <a href="https://github.com/sakanjo/filament-reset-action/actions"><img alt="Workflow status" src="https://img.shields.io/github/actions/workflow/status/sakanjo/filament-reset-action/tests.yml?style=for-the-badge"></a>
    <a href="https://laravel.com"><img alt="Laravel v11.x" src="https://img.shields.io/badge/Laravel-v11.x-FF2D20?style=for-the-badge&logo=laravel"></a>
    <a href="https://php.net"><img alt="PHP 8.2" src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php"></a>
</p>

<p align="center">A Filament action to reset the form state.</p>

> ✨ Help support the maintenance of this package by [sponsoring me](https://github.com/sponsors/sakanjo).

![Preview](https://github.com/sakanjo/filament-reset-action/art/preview.gif)

Table of Contents
=================

* [Install](#-install)
* [Usage](#-usage)
  * [On the create page](#on-the-create-page)
  * [On the edit page](#on-the-edit-page)
* [Support the development](#-support-the-development)
* [Credits](#%EF%B8%8F-credits)
* [License](#-license)

## 📦 Install

```
composer require sakanjo/filament-reset-action
```

## 🦄 Usage

### On the create page

```php
<?php

namespace App\Filament\Admin\Resources\UserResource\Pages;

use App\Filament\Admin\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;
use SaKanjo\FilamentResetAction\Actions\ResetAction;

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
```

### On the edit page

```php
<?php

namespace App\Filament\Admin\Resources\UserResource\Pages;

use App\Filament\Admin\Resources\UserResource;
use App\Filament\Base\Pages\EditRecord;
use SaKanjo\FilamentResetAction\Actions\ResetAction;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ResetAction::make(),
        ];
    }
}
```

## 💖 Support the development

**Do you like this project? Support it by donating**

Click the ["💖 Sponsor"](https://github.com/sponsors/sakanjo) at the top of this repo.

## ©️ Credits

- [Salah Kanjo](https://github.com/sakanjo)
- [All Contributors](https://github.com/sakanjo/filament-reset-action/contributors)

## 📄 License

[MIT License](https://github.com/sakanjo/filament-reset-action/blob/master/LICENSE) © 2023-PRESENT [Salah Kanjo](https://github.com/sakanjo)
