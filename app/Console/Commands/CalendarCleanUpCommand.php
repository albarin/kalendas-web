<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CalendarCleanUpCommand extends Command
{
    protected $name = 'calendar:clean-up';

    protected $description = 'Remove old custom generated calendars.';

    public function fire()
    {
        $path = storage_path('app/public/calendars');
        dd($path);
        $path = Storage::disk('public')->url('calendars');
        dd($path);
        $this->info('it works!');
    }
}