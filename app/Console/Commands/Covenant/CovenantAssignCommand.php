<?php

namespace App\Console\Commands\Covenant;

use App\Jobs\Covenant\CovenantAssignJob;
use Illuminate\Console\Command;

class CovenantAssignCommand extends Command
{

    protected $signature = 'covenant:assign';
    protected $description = 'Asigna un convenio a una nomina';

    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        CovenantAssignJob::dispatch();
    }
}
