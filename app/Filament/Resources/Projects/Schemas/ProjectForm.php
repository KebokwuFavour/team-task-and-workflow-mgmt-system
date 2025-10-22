<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('team_id')
                    ->relationship('team', 'name')
                    ->label('Team')
                    ->required(),
                Select::make('user_id')
                    ->relationship('owner', 'name')
                    ->label('Leader')
                    ->required(),
                TextInput::make('title')
                    ->columnSpanFull()
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(['pending' => 'Pending', 'in_progress' => 'In progress', 'completed' => 'Completed'])
                    ->default('pending')
                    ->required(),
                DatePicker::make('deadline'),
            ]);
    }
}