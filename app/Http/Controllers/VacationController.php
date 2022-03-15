<?php

namespace App\Http\Controllers;

use App\Http\Resources\VacationResource;
use App\Models\Vacation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * @group Vacation
 */
class VacationController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\VacationResource
     * @apiResourceModel App\Models\Vacation
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $vacations = Vacation::filter($filter)->paginate($paginate);
        return VacationResource::collection($vacations);
    }
    /**
     * @bodyParam start_date date El inicio de las vacaciones. Example: YYYY-MM-DD
     * @bodyParam end_date date El final de las vacaciones. Example: YYYY-MM-DD
     * @bodyParam user_id int El id del usuario. Example: 1
     * @apiResource App\Http\Resources\VacationResource
     * @apiResourceModel App\Models\Vacation
     */
    public function store(Request $request)
    {
        if ($request->start_date > $request->end_date) {
            return response()->json(['status'=>true,'data'=>'La fecha inicial debe ser mayor a la final']);
        }
        $bdVacation   = Vacation::where('user_id',$request->user_id)->orderBy('created_at','desc')->first();
        $dataVacation = daysWeekForPayroll($request->start_date, $request->end_date);

        if ($bdVacation) {
            $date           = date_create($request->start_date)->format('Y-m');
            $dateVacationbd = date_create($bdVacation->start_date)->format('Y-m');
            if ($dateVacationbd == $date) {
                return response()->json(['status'=>true,'data'=>'No se puede volver a cargar vacaciones este mes']);
            }
        }
        $vacation = $request->all();
        $dayWeek  = daysWeek($request->start_date, $request->end_date);

        if($dayWeek->original['days'] > 60){
            return response()->json(['status'=>true,'data'=>'No se puede cargar vacaciones por mas de 60 dias habiles']);
        }
        $vacation['total_days'] = $dayWeek->original['days'];
        $vacation['end_date']   = $dayWeek->original['end_date'];
        $vacation['days_apart'] = $dataVacation->original['diferentDayPeriod'];

        $vacation = Vacation::create($vacation);
        return response()->json(['status'=>true,'data'=>'Se cargaron vacaciones correctamente']);
    }
    /**
     * @apiResource App\Http\Resources\VacationResource
     * @apiResourceModel App\Models\Vacation
     */
    public function show(Vacation $vacation)
    {
        return response()->json(['status'=>true,'data'=>new VacationResource($vacation)]);
    }
    /**
     * @urlParam id int El id de las vacaciones
     * @bodyParam start_date date El inicio de las vacaciones. Example: YYYY-MM-DD
     * @bodyParam end_date date El final de las vacaciones. Example: YYYY-MM-DD
     * @bodyParam user_id int El id del usuario. Example: 1
     * @apiResource App\Http\Resources\VacationResource
     * @apiResourceModel App\Models\Vacation
     */
    public function update(Vacation $vacation, Request $request)
    {
        $vacation->update($request->all());
        return response()->json(['status'=>true,'data'=>$vacation]);
    }
    /**
     * @apiResource App\Http\Resources\VacationResource
     * @apiResourceModel App\Models\Vacation
     */
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
