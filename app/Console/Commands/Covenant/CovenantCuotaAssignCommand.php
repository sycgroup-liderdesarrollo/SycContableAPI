<?php

namespace App\Console\Commands\Covenant;

use App\Jobs\Covenant\CovenantCuotaAssignJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CovenantCuotaAssignCommand extends Command
{

    protected $signature = 'covenant:cuota';
    protected $description = 'Asigna un concepto de un convenio por cuotas';


    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        Log::info('Entró al command');

        CovenantCuotaAssignJob::dispatch();
    }
}
