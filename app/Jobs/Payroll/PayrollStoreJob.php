<?php

namespace App\Jobs\Payroll;

use App\Models\Payroll;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PayrollStoreJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $date = Carbon::now()->format('d');

        if($date >= 5 || $date<=19)
        {
            $period = 1;
        }
        if($date>=20 || $date<=4)
        {
            $period = 2;
        }

        $users = DB::table('users')
        ->where('active', '=','1')
        ->get();

        $periodActual = DB::table('payrolls')
        ->whereMonth('created_at', Carbon::now()->format('m'))
        ->whereYear('created_at', Carbon::now()->format('Y'))
        ->select('period_id')
        ->value('period_id');

        if( $periodActual != $period)
        {
            foreach ($users as $user)
            {
            Payroll::create(['period_id'=>$period,'user_id'=>$user->id]);
            }

        }
        else{
            return false;
        }
    }

}
