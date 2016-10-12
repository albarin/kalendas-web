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
            calendars_path() . '/*-*-*.docx'
        );

        File::delete($customCalendars);
    }
}