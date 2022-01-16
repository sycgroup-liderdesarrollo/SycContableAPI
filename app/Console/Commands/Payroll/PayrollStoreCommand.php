<?php

namespace App\Console\Commands\Payroll;

use App\Jobs\Payroll\PayrollStoreJob;
use Illuminate\Console\Command;

class PayrollStoreCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'payroll:store';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear una nomina';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        PayrollStoreJob::dispatch();
    }
}
