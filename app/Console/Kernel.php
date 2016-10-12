<?php

namespace App\Console;

use App\Console\Commands\CustomCalendarCleanUpCommand;
use App\Console\Commands\DefaultCalendarCleanUpCommand;
use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        CustomCalendarCleanUpCommand::class,
        DefaultCalendarCleanUpCommand::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command(CustomCalendarCleanUpCommand::NAME)->hourly();

        $schedule->command(DefaultCalendarCleanUpCommand::NAME)->monthly();
    }
}
