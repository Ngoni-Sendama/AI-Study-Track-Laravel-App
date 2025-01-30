<?php

namespace App\Filament\Widgets;

use App\Models\Exam;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Support\Facades\Auth;

class LatestExams extends BaseWidget
{
    protected static ?string $heading = 'Latest Exams Perfomance';

    public function table(Table $table): Table
    {
        return $table
            ->query(Exam::where('user_id', Auth::id()))
            ->paginated([5])
            ->columns([
                Tables\Columns\TextColumn::make('subject.name')
                    ->wrap()
                    ->sortable(),
                Tables\Columns\TextColumn::make('marks')
                    ->numeric(decimalPlaces: 0)
                    ->suffix('%')
                    ->getStateUsing(function (Exam $record) {
                        // Return null if marks are not written
                        return $record->marks;
                    })
                    ->color(fn(?string $state): ?string => $state !== null && (float)$state >= 50 ? 'success' : 'danger')
                    ->sortable(),
            ]);
    }
}
