<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class AIChat extends Page
{
    protected static ?string $navigationIcon = 'hugeicons-ai-brain-03';

    protected static string $view = 'filament.pages.a-i-chat';

    protected static ?string $navigationLabel = 'AI Tutor';
}
