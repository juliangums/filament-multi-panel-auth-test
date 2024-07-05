<?php

namespace App\Filament\Resources\TestResource\Pages;

use Filament\Actions;
use App\Filament\Resources\TestResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTest extends CreateRecord
{
    protected static string $resource = TestResource::class;
}
