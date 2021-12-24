<?php

namespace App\Http\Controllers;

use App\Events\NominaEvent;
use App\Models\Payroll;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysqli;

class PayrollController extends Controller
{

    public function index()
    {
        $payroll = Payroll::all();
        return $payroll;
    }

    public function store(Request $request)
    {
        $payroll = Payroll::create($request->all());
        return $payroll;
    }

    public function show(Payroll $payroll)
    {
        $payroll->period;
        $payroll->user;
        $payroll->concepts;
        return $payroll;
    }

    public function update(Request $request, Payroll $payroll)
    {
        $payroll->update($request->all());
        return $payroll;
    }

    public function destroy(Payroll $payroll)
    {
        $payroll->delete();
        return $payroll;
    }
    public function asignarConcepto($id, $id2, Request $request)
    {   //id para la payroll y el id2 para el concepto
        $payroll = Payroll::find($id);

        $payroll->concepts()->attach($id2, ['count' => $request->count,'unit_value'=>$request->unit_value , 'total_value'=> $request->count * $request->unit_value]); //asigna el concepto segun la payroll
        return $payroll->concepts;
    }
    public function PDFi($payroll)
    {
        $payroll = Payroll::find($payroll);

        $pdf = PDF::loadView('payroll.payroll', ['payroll'=>$payroll]);

        return $pdf->stream(); //se peude usar un ->download() y stream();
    }

    public function consultDatePeriod(Request $request)
    {
        $payroll = DB::table('payrolls')
        ->where('period_id', '=', $request->input('period_id'))
        ->where('user_id', '=', 1)
        ->whereDate('created_at', $request->input('created_at'))
        ->get();
        return $payroll;
    }
    public function consultDeduccion(Request $request)
    {
        $payroll = DB::table('payrolls')
       //->select(DB::raw('SUM(concept_payroll.total_value) AS total'))
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

        return $payroll;
    }
}
