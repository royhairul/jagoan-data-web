<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->autocapitalize('words')
                    ->required(),
                Forms\Components\TextInput::make('author')
                    ->label('Penulis')
                    ->autocapitalize('words')
                    ->required(),
                MarkdownEditor::make('content')
                    ->label('Konten')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'bulletList',
                        'orderedList',
                        'link',
                        'blockquote',
                        'codeBlock',
                        'attachFiles',
                        'h2',
                        'h3',
                        'undo',
                        'redo',
                    ])
                    ->fileAttachmentsDisk('public'),
                FileUpload::make('image')
                    ->label('Thumbnail')
                    ->directory('blogs') // Folder penyimpanan di `storage/app/public/blogs`
                    ->image() // Validasi sebagai gambar
                    ->required(), // Wajib diisi jika diperlukan
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Thumbnail') // Menampilkan thumbnail gambar
                    ->size(100), // Ukuran thumbnail
                Tables\Columns\TextColumn::make('title')->label('Judul')->searchable(),
                Tables\Columns\TextColumn::make('author')->label('Penulis'),
                Tables\Columns\TextColumn::make('created_at')->label('Tanggal Dibuat')->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
