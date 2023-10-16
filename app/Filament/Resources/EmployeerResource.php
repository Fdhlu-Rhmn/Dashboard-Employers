<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeerResource\Pages;
use App\Filament\Resources\EmployeerResource\RelationManagers;
use App\Models\Employeer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;

class EmployeerResource extends Resource
{
    protected static ?string $model = Employeer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->helperText('Masukkan nama lengkap anda disini'),
                TextInput::make('company')
                    ->helperText('Masukkan nama perusahaan anda bekerja'),
                TextInput::make('email')
                    ->helperText('Masukkan email anda disini')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('company'),
                Tables\Columns\TextColumn::make('email')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmployeers::route('/'),
            'create' => Pages\CreateEmployeer::route('/create'),
            'edit' => Pages\EditEmployeer::route('/{record}/edit'),
        ];
    }
}