<?php

namespace App\Providers;

use App\Console\Commands\CalendarCleanUpCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('command.calendar.clean-up', function()
        {
            return new CalendarCleanUpCommand;
        });

        $this->commands(
            'command.calendar.clean-up'
        );
    }
}