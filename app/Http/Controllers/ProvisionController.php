<?php

namespace App\Http\Controllers;

use App\Models\Provision;
use App\Models\Setting;
use App\Models\User;
use App\Models\Vacation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProvisionController extends Controller
{
    public function index()
    {
        $provisions = Provision::all();
        return response()->json(['status'=>true,'data'=>$provisions]);
    }
    public function show(Provision $provision)
    {
        return response()->json(['status'=>true,'data'=>$provision]);
    }
    public function store(Request $request)
    {
        $provision = $request->all();
        $provision['period_id'] = period(Carbon::now()->format('d'));
        $provision = Provision::create($provision);
        return response()->json(['status'=>true,'data'=>$provision]);
    }
    public function update(Provision $provision, Request $request)
    {
        $provision->update($request->all());
    }
    public function destroy(Provision $provision)
    {
        $provision->delete();
    }

    public function prueba()
    {
        $vacations = Vacation::where('end_date', '>', Carbon::now()->format('Y-m-d'))->get();
        Log::info($vacations);
        Log::info(json_encode(empty($vacations)));
        if (!empty($vacations)) {
            return "entró";
            foreach($vacations as $vacation){
                $date_vacation = date_create($vacation->start_date)->format('Y-m');
                $date_now = Carbon::now()->format('Y-m');
                $period_vacation = period(date_create($vacation->start_date)->format('d'));
                $period_now = period(Carbon::now()->format('d'));

                if (($date_vacation == $date_now) && ($period_now == $period_vacation)) {
                    $user = User::findOrFail($vacation->user_id);
                    $payroll = $user->lastPayroll;
                    $vacationDays = daysWeekForPayroll($vacation->start_date, $vacation->end_date);
                    $payroll->concepts()->updateExistingPivot(1,
                    [
                        'count'=> $vacationDays->original['workdedDays'],
                        'unit_value'=>$payroll->user->base_salary/30,
                        'total_value'=>$vacationDays->original['workdedDays']*($payroll->user->base_salary/30)
                    ]);
                    $ifexist = DB::table('concept_payroll')->where('concept_id',5)->where('payroll_id', $payroll->id)->first();
                    if ($ifexist != null) {
                        $payroll->concepts()->updateExistingPivot(5,
                        [
                            'count'=>$vacationDays->original['paidDays'],
                            'unit_value'=>$payroll->user->base_salary/30,
                            'total_value'=>$vacationDays->original['paidDays']*($payroll->user->base_salary/30)
                        ]);
                    }else{
                        $payroll->concepts()->attach(5,
                        [
                            'count'=>$vacationDays->original['paidDays'],
                            'unit_value'=>$payroll->user->base_salary/30,
                            'total_value'=>$vacationDays->original['paidDays']*($payroll->user->base_salary/30)
                        ]);
                    }
                    $payroll->concepts()->detach(2);
                }
            }
            return response()->json(['status'=>true,'data'=>$vacationDays]);
        }
    }

}


