<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class DefaultCalendarCleanUpCommand extends Command
{
    const NAME = 'calendar:default-clean-up';

    protected $name = self::NAME;

    protected $description = 'Remove default generated calendars older than a year.';

    public function fire()
    {
        $pastYear = Carbon::today()->subYear()->year;

        $defaultCalendars = File::glob(
            storage_path('app/public/calendars') . "/*-$pastYear.docx"
        );

        File::delete($defaultCalendars);
    }
}