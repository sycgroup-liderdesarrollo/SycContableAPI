<?php

namespace App\Http\Controllers;

use App\Http\Resources\VacationResource;
use App\Models\Vacation;
use Illuminate\Http\Request;

/**
 * @group Vacation
 */
class VacationController extends Controller
{
    public function index()
    {
        $vacations = Vacation::all();
        return response()->json(['status'=>true,'data'=>VacationResource::collection($vacations)]);
    }
    /**
     * @bodyParam start_date date El inicio de las vacaciones. Example: YYYY-MM-DD
     * @bodyParam end_date date El final de las vacaciones. Example: YYYY-MM-DD
     * @bodyParam user_id int El id del usuario. Example: 1
     */
    public function store(Request $request)
    {
        $bdVacation = Vacation::where('user_id',$request->user_id)->orderBy('created_at','desc')->first();
        $dataVacation = daysWeekForPayroll($request->start_date, $request->end_date);
        if ($bdVacation) {
            $bdVacation->created_at->format('Y-m');
            $date = date_create($request->start_date);
            if ($bdVacation->created_at->format('Y-m') == $date->format('Y-m')) {
                return response()->json(['status'=>true,'data'=>'No se puede volver a cargar vacaciones este mes']);
            }
        }
        $vacation = $request->all();
        $dayWeek = daysWeek($request->start_date, $request->end_date);
        $vacation['total_days'] = $dayWeek->original['days'];
        $vacation['end_date'] = $dayWeek->original['end_date'];
        $vacation['days_apart'] = $dataVacation->original['diferentDayPeriod'];
        $vacation = Vacation::create($vacation);
        return response()->json(['status'=>true,'data'=>$vacation,'vacation'=>$dataVacation->original]);
    }
    public function show(Vacation $vacation)
    {
        return response()->json(['status'=>true,'data'=>new VacationResource($vacation)]);
    }
    /**
     * @urlParam id int El id de las vacaciones
     * @bodyParam start_date date El inicio de las vacaciones. Example: YYYY-MM-DD
     * @bodyParam end_date date El final de las vacaciones. Example: YYYY-MM-DD
     * @bodyParam user_id int El id del usuario. Example: 1
     */
    public function update(Vacation $vacation, Request $request)
    {
        $vacation->update($request->all());
        return response()->json(['status'=>true,'data'=>$vacation]);
    }
    public function destroy(Vacation $vacation)
    {
        $vacation->delete();
        return response()->json(['status'=>true,'data'=>$vacation]);
    }
    /**
     * @bodyParam start_date data Fecha de inicio. Example: YYYY-MM-DD
     * @bodyParam end_date data Fecha final. Example: YYYY-MM-DD
     */
    public function calcDays(Request $request)
    {
        $daysWeek = daysWeek($request->start_date, $request->end_date);
        return response()->json(['status'=>true, 'data'=>$daysWeek->original['days']]);
    }
}
