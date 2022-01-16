<?php

namespace App\Console\Commands\Covenant;

use App\Jobs\Covenant\CovenantAssignJob;
use Illuminate\Console\Command;

class CovenantAssignCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'covenant:assign';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Asigna un convenio a una nomina';

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
        CovenantAssignJob::dispatch();
    }
}
