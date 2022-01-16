<?php

namespace App\Jobs\Covenant;

use App\Models\Payroll;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class CovenantAssignJob implements ShouldQueue
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
        $payroll = new Payroll();

        //valor de auxilio de transporte
        $valueTrans = DB::table('settings')
        ->where('id',2)
        ->select('value')
        ->value('value');

        //consulta todos los convenios que estén activos y asociados al usuario que está en la nomina
        $covenants = DB::table('payrolls')
        ->join('users', 'payrolls.user_id', 'users.id')
        ->join('covenant_user', 'covenant_user.user_id', 'users.id')
        ->join('covenants', 'covenant_user.covenant_id', 'covenants.id')
        ->join('concepts', 'concepts.id', 'covenants.concept_id')
        ->select(
            'covenants.value',
            'covenants.concept_id'
        )
        ->distinct()
        ->get();

        // $payroll = DB::table('payrolls')
        // ->whereDay('created_at', Carbon::now()->format('d'))
        // ->whereMonth('created_at', Carbon::now()->format('m'))
        // ->whereYear('created_at', Carbon::now()->format('Y'))
        // ->get();

        if($covenants)
        {
            foreach ($covenants as $covenant) {
                $payroll->concepts()->attach($covenant->concept_id,['count' => 1, 'unit_value'=>$covenant->value,'total_value'=>$covenant->value]);
            }
        }

        $payroll->concepts()->attach(1 ,['count' => 15, 'unit_value'=>$payroll->user->base_salary/30, 'total_value'=>($payroll->count ?? 15)*($payroll->user->base_salary/30)]);
        $payroll->concepts()->attach(2 ,['count' => 1, 'unit_value'=>$valueTrans, 'total_value'=>$valueTrans]);
    }
}
