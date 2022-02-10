<?php

namespace App\Console\Commands\Provision;

use App\Jobs\Provision\ProvisionJob;
use Illuminate\Console\Command;

class ProvisionCommand extends Command
{
    protected $signature = 'command:provision';

    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        ProvisionJob::dispatch();
    }
}
