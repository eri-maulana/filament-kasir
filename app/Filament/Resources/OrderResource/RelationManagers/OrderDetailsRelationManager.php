<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class OrderDetailsRelationManager extends RelationManager
{
    protected static string $relationship = 'orderDetails';

    // public function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             Forms\Components\TextInput::make('price')
    //                 ->required()
    //                 ->maxLength(255),
    //         ]);
    // }

    public function table(Table $table): Table
    {
        return $table
        ->recordTitleAttribute('order_number')
        ->columns([
            Tables\Columns\TextColumn::make('product.name')
                ->searchable(),
            Tables\Columns\TextColumn::make('price')
                ->label('Harga Satuan')
                ->numeric()
                ->prefix(fn (OrderDetail $record) => $record->quantity . ' x ')
                ->alignEnd(),
            Tables\Columns\TextColumn::make('subtotal')
                ->numeric()
                ->alignEnd(),
        ]);
    }
}
