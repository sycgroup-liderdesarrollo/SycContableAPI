<?php

namespace App\Jobs\Payroll;

use App\Models\Payroll;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class PayrollStoreJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public function __construct()
    {
        //
    }
    public function handle()
    {
        $date = Carbon::now()->format('d');
        if($date == 1 || $date==15){
            $period = 1;
        }else{
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

        if( $periodActual != $period){
            foreach ($users as $user){
            $payroll = Payroll::create(['period_id'=>$period,'user_id'=>$user->id]);
        }
        }else{
            return false;
        }
        return response(['status'=>200, 'data'=>$payroll]);
    }
}
