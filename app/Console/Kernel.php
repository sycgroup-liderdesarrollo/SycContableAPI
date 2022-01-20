<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        Commands\Payroll\PayrollStoreCommand::class,
        Commands\Covenant\CovenantAssignCommand::class
    ];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('payroll:store')->twiceMonthly(1, 16, '00:00');
        $schedule->command('covenant:assign')->twiceMonthly(1, 16, '01:00');
        $schedule->command('covenant:cuota')->twiceMonthly(1, 16, '01:10');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
