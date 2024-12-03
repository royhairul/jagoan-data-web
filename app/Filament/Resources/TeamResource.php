<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('position')
                    ->required()
                    ->maxLength(255),

                TextInput::make('link_facebook')
                    ->nullable()
                    ->url()
                    ->maxLength(255)
                    ->label('Facebook Link'),

                TextInput::make('link_instagram')
                    ->nullable()
                    ->url()
                    ->maxLength(255)
                    ->label('Instagram Link'),

                TextInput::make('link_linkedin')
                    ->nullable()
                    ->url()
                    ->maxLength(255)
                    ->label('LinkedIn Link'),
                // Kolom 'image' menggunakan ImageUpload
                FileUpload::make('image')
                    ->required()
                    ->image()
                    ->disk('public') // Pilih disk yang sesuai untuk penyimpanan gambar
                    ->directory('teams/images'), // Menyimpan gambar di direktori 'teams/images'

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Thumbnail') // Menampilkan thumbnail gambar
                    ->size(100),
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('position')
                    ->sortable()
                    ->searchable(),

                // Menampilkan link sosial media
                TextColumn::make('link_facebook')
                    ->label('Facebook')
                    ->searchable(),

                TextColumn::make('link_instagram')
                    ->label('Instagram')
                    ->searchable(),

                TextColumn::make('link_linkedin')
                    ->label('LinkedIn')
                    ->searchable(),
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
