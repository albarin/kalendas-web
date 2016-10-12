<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CustomCalendarCleanUpCommand extends Command
{
    const NAME = 'calendar:custom-clean-up';

    protected $name = self::NAME;

    protected $description = 'Remove custom generated calendars.';

    public function fire()
    {
        $customCalendars = File::glob(
            storage_path('app/public/calendars') . '/*-*-*.docx'
        );

        File::delete($customCalendars);
    }
}