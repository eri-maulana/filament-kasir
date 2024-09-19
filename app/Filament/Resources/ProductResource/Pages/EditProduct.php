<?php

namespace App\Filament\Resources\ProductResource\Pages;

use Filament\Actions;
use App\Models\Product;
use Illuminate\Database\QueryException;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ProductResource;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->action(function (Product $product) {
                    try {
                        $product->delete();
                        Notification::make()
                            ->success()
                            ->title('Product Deleted')
                            ->body('The product has been successfully deleted.')
                            ->send();
                    } catch (QueryException $e) {
                        Notification::make()
                            ->danger()
                            ->title('Failed to delete product')
                            ->body('This product is still being used.')
                            ->send();
                    }
                }),
        ];
    }
}
