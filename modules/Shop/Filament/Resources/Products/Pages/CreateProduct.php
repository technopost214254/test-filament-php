<?php

namespace Modules\Shop\Filament\Resources\Products\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Shop\Filament\Resources\Products\ProductResource;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;
}
