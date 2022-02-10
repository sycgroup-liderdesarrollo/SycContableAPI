<?php

namespace App\Jobs\Payroll;

use App\Models\Payroll;
use App\Models\Provision;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PayrollStoreJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public function __construct()
    {
        //
    }
    public function handle()
    {
        switch (Carbon::now()->format('d')) {
            case 1:
                $period = 1;
                break;
            case 16:
                $period = 2;
                break;

            default:
                break;
        }
        $provision['period_id'] = period(Carbon::now()->format('d'));
        $provision = Provision::create($provision);

        $payrollActual = Payroll::whereMonth('created_at', Carbon::now()->format('m'))
        ->whereYear('created_at', Carbon::now()->format('Y'))
        ->where('period_id',$period)
        ->select('period_id')
        ->first();

        if( !$payrollActual ){
            $users = User::where('active', 1)->get();
            foreach ($users as $user){
                Payroll::create(['period_id'=>$period,'user_id'=>$user->id,'provision_id'=>$provision->id]);
            }
        }

    }
}
