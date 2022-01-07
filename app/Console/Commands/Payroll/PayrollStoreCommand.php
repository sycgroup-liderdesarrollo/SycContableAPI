<?php

namespace App\Console\Commands\Payroll;

use App\Jobs\Payroll\PayrollStoreJob;
use Illuminate\Console\Command;

class PayrollStoreCommand extends Command
{
    protected $signature = 'payroll:store';
    protected $description = 'Crear una nomina';

    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        PayrollStoreJob::dispatch();
    }
}
