<?php

namespace App\Jobs\Covenant;

use App\Models\Covenant;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CovenantCuotaAssignJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public function __construct()
    {
        //
    }
    public function handle()
    {
        $covenants = Covenant::where('covenant_type_id',1)->get();

        foreach ($covenants as $covenant) {
            foreach ($covenant->users as $user) {
                $payrollUser = $user->lastPayroll;
                if ($user->pivot->paid_dues != $user->pivot->dues) {
                    $payrollUser->concepts()->attach($covenant->concept_id, ['count' => 1,'unit_value'=>$user->pivot->value , 'total_value'=>$user->pivot->value]);
                    $user->covenants()->updateExistingPivot($covenant->id,['paid_dues'=>$user->pivot->paid_dues+1]);
                    return response()->json(['status'=>true, 'data'=>"El concepto se cargó con exito!"]);
                }
            }
        }
    }
}
