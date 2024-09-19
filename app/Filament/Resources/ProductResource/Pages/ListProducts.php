<?php

namespace App\Filament\Resources\ProductResource\Pages;

use Filament\Actions;
use App\Filament\Imports\ProductImporter;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ProductResource;

class ListProducts extends ListRecords
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\ImportAction::make()
                ->importer(ProductImporter::class)
                ->icon('heroicon-o-document-arrow-down'),
        ];;
    }
}
