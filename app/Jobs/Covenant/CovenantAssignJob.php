<?php

namespace App\Jobs\Covenant;

use App\Models\Covenant;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class CovenantAssignJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function handle()
    {
        $covenants = Covenant::where('covenant_type_id',2)->get();
        $actualDate = Carbon::now()->format('Y-m-d');
        $ifExistCovenantPayroll = DB::table('concept_payroll')
        ->whereDate('created_at', Carbon::now()->format('Y-m-d'))
        ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d") as created_at'))
        ->value('created_at');
        $usersComun = User::where('active', '=','1')->get();
        $value = DB::table('settings')
        ->where('id',2)
        ->select('value')
        ->value('value');
        if($ifExistCovenantPayroll != $actualDate){
            foreach ($covenants as $covenant) {
                foreach ($covenant->users as $user) {
                    $payrollUser = $user->lastPayroll;
                    $payrollUser->concepts()->attach($covenant->concept_id, ['count' => 1,'unit_value'=>$covenant->value , 'total_value'=>$covenant->value]);
                }
            }
            foreach($usersComun as $userComun){
                $payrollUserComun = $userComun->lastPayroll;
                $payrollUserComun->concepts()->attach(1 ,['count' => 15, 'unit_value'=>$payrollUserComun->user->base_salary/30, 'total_value'=>($payrollUserComun->count ?? 15)*($payrollUserComun->user->base_salary/30)]);
                $payrollUserComun->concepts()->attach(2 ,['count' => 1, 'unit_value'=>$value, 'total_value'=>$value]);
            }
        }
        else {
            return response()->json(['status'=>true,'data'=> "No se puede volver a crear el mismo concepto en la payroll!"]);

        }
        return response()->json(['status'=>true,'data'=>$payrollUser]);
    }
}
