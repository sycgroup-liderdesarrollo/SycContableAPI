<?php

namespace App\Http\Controllers;

use App\Http\Requests\Payroll\AddConceptsRequest;
use App\Http\Resources\PayrollResource;
use App\Models\Payroll;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @group Payroll
 */
class PayrollController extends Controller
{
    /**
     * @apiResourceCollection App\Http\Resources\PayrollResource
     * @apiResourceModel App\Models\Payroll
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $payrolls = Payroll::filter($filter)->paginate($paginate);
        return PayrollResource::collection($payrolls);
    }
    /**
     * @bodyParam period_id int required ID de llave foranea del tipo de periodo, 5 a 19 o 20 a 4. Example: 1
     * @bodyParam user_id int required ID de llave foranea del usuario. Example: 2
     * @apiResource App\Http\Resources\PayrollResource
     * @apiResourceModel App\Models\Payroll
     */
    public function store(Request $request)
    {
       $payroll = Payroll::create($request->all());
        return new PayrollResource($payroll);
    }
    /**
     * @apiResource App\Http\Resources\PayrollResource
     * @apiResourceModel App\Models\Payroll
     */
    public function show(Payroll $payroll)
    {
        return new PayrollResource($payroll);
    }
    public function userPayroll(User $user)
    {
        $payroll = $user->lastPayroll;
        return new PayrollResource($payroll);
    }
    /**
     * @bodyParam period_id int required ID de llave foranea del tipo de periodo, 5 a 19 o 20 a 4. Example: 1
     * @bodyParam user_id int required ID de llave foranea del usuario. Example: 2
     * @apiResource App\Http\Resources\PayrollResource
     * @apiResourceModel App\Models\Payroll
     */
    public function update(Request $request, Payroll $payroll)
    {
        $payroll->update($request->all());
        return new PayrollResource($payroll);
    }
    /**
     * @apiResource App\Http\Resources\PayrollResource
     * @apiResourceModel App\Models\Payroll
     */
    public function destroy(Payroll $payroll)
    {
        $payroll->delete();
        return new PayrollResource($payroll);
    }

    public function asignarConcepto($payroll_id, AddConceptsRequest $request)
    {
        $payroll = Payroll::find($payroll_id);
        $payroll->concepts()->attach(['concept_id'=>$request->concept_id], ['count' => $request->count,'unit_value'=>$request->unit_value , 'total_value'=> $request->count * $request->unit_value]); //asigna el concepto segun la payroll
        return new PayrollResource($payroll);
    }
    /**
     * @urlParam payroll_id int required El id de la nomina a la que se le eliminará el concepto
     * @queryParam conceptPivotId int required El id del concepto que se eliminará ubicado en la pivot
     */
    public function eliminarConceptoPayroll($payroll_id,Request $request)
    {
        $payroll = Payroll::find($payroll_id);
        $payroll->concepts()->wherePivot('id', $request->input('conceptPivotId'))->detach();
        return response()->json(['status'=>true,'data'=>"Se eliminó con exitó el conceptPivotId: {$request->input('conceptPivotId')}"]);
    }
    /**
     * @queryParam period_id int required El id del periodo de la nomina que se va a consultar. Example: 1
     * @queryParam user_id int required El id del usuario de la nomina. Example: 2
     * @queryParam created_at date required La fecha con el MES de la nomina. Example: 12
     */
    public function consultDatePeriod(Request $request)
    {
        $payroll = DB::table('payrolls')
        ->where('period_id', '=', $request->input('period_id'))
        ->where('user_id', '=', $request->input('user_id'))
        ->whereMonth('created_at', '=', $request->input('created_at'))
        ->get();
        return new PayrollResource($payroll);
    }
    /**
     * @queryParam period_id int required ID de llave foranea para el periodo de la nomina que se va a consultar (5 a 19, 20 a 4). Example: 1
     * @queryParam covenants_id int required ID de llave foranea para el convenio que se va a consultar. Example: 1
     */
    public function consultDeduccion(Request $request)
    {
        $payroll = DB::table('payrolls')
        ->join('concept_payroll', 'concept_payroll.payroll_id', '=', 'payrolls.id')
        ->join('concepts', 'concept_payroll.concept_id', '=', 'concepts.id')
        ->join('covenants', 'covenants.concept_id', '=', 'concepts.id')
        ->join('users', 'payrolls.user_id', '=', 'users.id')
        ->join('periods', 'payrolls.period_id', '=', 'periods.id')
        ->select(
            'payrolls.id AS payroll_id',
            'covenants.id AS covenants_id',
            'concepts.name AS concept_name',
            'covenants.name AS covenant_name',
            'users.name AS user_name',
            'periods.name AS period_name',
            'concept_payroll.total_value AS value_charged',
            'payrolls.period_id AS periodo',
            'payrolls.created_at AS fecha',
            'users.identification_number AS identification_number'
        )
        ->where('periods.id', $request->query('period_id'))
        ->where('covenants.id', $request->query('covenants_id'))
        ->whereYear('payrolls.created_at', date('Y', strtotime($request->query('created_at'))))
        ->whereMonth('payrolls.created_at',  date('m', strtotime($request->query('created_at'))))
        ->get();
        return new PayrollResource($payroll);
    }
}
