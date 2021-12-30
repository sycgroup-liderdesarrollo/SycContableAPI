<?php

namespace App\Http\Controllers;

use App\Events\NominaEvent;
use App\Models\Payroll;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysqli;
/**
 * @group Payroll
 */
class PayrollController extends Controller
{

    public function index()
    {
        $payrolls = Payroll::all();
        return response()->json(['status'=>true,'data'=>$payrolls]);
    }
/**
 * @bodyParam days_settled int required Los dias trabajados. Example: 15
 * @bodyParam period_id int required ID de llave foranea del tipo de periodo, 5 a 19 o 20 a 4. Example: 1
 * @bodyParam user_id int required ID de llave foranea del usuario. Example: 2
 */
    public function store(Request $request)
    {
        $payroll = Payroll::create($request->all());
        return response()->json(['status'=>true,'data'=>$payroll]);
    }

    public function show(Payroll $payroll)
    {
        $payroll->period;
        $payroll->user;
        $payroll->concepts;
        return response()->json(['status'=>true,'data'=>$payroll]);
    }
/**
 * @bodyParam days_settled int required Los dias trabajados. Example: 15
 * @bodyParam period_id int required ID de llave foranea del tipo de periodo, 5 a 19 o 20 a 4. Example: 1
 * @bodyParam user_id int required ID de llave foranea del usuario. Example: 2
 */
    public function update(Request $request, Payroll $payroll)
    {
        $payroll->update($request->all());
        return response()->json(['status'=>true,'data'=>$payroll]);
    }

    public function destroy(Payroll $payroll)
    {
        $payroll->delete();
        return response()->json(['status'=>true,'data'=>$payroll]);
    }
    /**
     * @urlParam id int required El id de la nomina a la que se le asignará el concepto. Example: 1
     * @urlParam id2 int required El id del concepto. Example: 2
     * @bodyParam count int required La cantidad de veces que se cobra un concepto en la nomina. Example: 15
     * @bodyParam unit_value int required El valor unitario del concepto. Example: 30000
     */
    public function asignarConcepto($id, $id2, Request $request)
    {   //id para la payroll y el id2 para el concepto
        $payroll = Payroll::find($id);

        $payroll->concepts()->attach($id2, ['count' => $request->count,'unit_value'=>$request->unit_value , 'total_value'=> $request->count * $request->unit_value]); //asigna el concepto segun la payroll
        $payroll->concepts;
        return response()->json(['status'=>true,'data'=>$payroll]);
    }

    public function PDFi($payroll)
    {
        $payroll = Payroll::find($payroll);

        $pdf = PDF::loadView('payroll.payroll', ['payroll'=>$payroll]);

        return $pdf->stream(); //se peude usar un ->download() y stream();
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
        return response()->json(['status'=>true,'data'=>$payroll]);
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
        ->join('concept_types', 'concepts.concept_type_id', '=', 'concept_types.id')
        ->join('covenants', 'covenants.concept_id', '=', 'concepts.id')
        ->join('users', 'payrolls.user_id', '=', 'users.id')
        ->join('periods', 'payrolls.period_id', '=', 'periods.id')
        ->select(
            'payrolls.id AS nomina_id',
            'concepts.name AS concepto',
            'concept_types.name AS tipo_concepto',
            'covenants.name AS convenio',
            'users.name AS nombre_usuario',
            'periods.name AS periodo',
            'concept_payroll.total_value AS valor_cobrado'
        )
        ->where('periods.id', $request->input('period_id'))
        ->where('covenants.id', $request->input('covenants_id'))

        ->get();
        return response()->json(['status'=>true,'data'=>$payroll]);
    }
}
