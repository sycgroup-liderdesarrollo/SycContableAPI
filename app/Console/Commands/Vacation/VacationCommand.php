<?php

namespace App\Console\Commands\Vacation;

use App\Jobs\Vacation\VacationJob;
use Illuminate\Console\Command;

class VacationCommand extends Command
{

    protected $signature = 'command:vacation';


    protected $description = 'Command description';


    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        VacationJob::dispatch();
    }
}
