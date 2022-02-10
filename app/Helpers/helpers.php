<?php

use App\Models\Payroll;
use App\Models\Provision;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

function daysWeek($inicio, $fin){

    $start = new DateTime($inicio);
    $end = new DateTime($fin);
    $end->modify('+1 day');
    $interval = $end->diff($start);
    $days = $interval->days;
    $period = new DatePeriod($start, new DateInterval('P1D'), $end);
    $holidays = array();
    foreach($period as $dt) {
        $curr = $dt->format('D');
        if($curr == 'Sun') {
            $days--;
        }elseif (in_array($dt->format('Y-m-d'), $holidays)) {
            $days--;
        }
    }
    return response()->json(['days'=>$days, 'end_date'=>$end->modify('-1 day')->format('Y-m-d')]);
}
function period($day){

    if ($day >= 1 && $day <=15) {
        return 1;
    }
    elseif($day >= 16 && $day <=31){
        return 2;
    }else {
        return 0;
    }
}
function daysWeekForPayroll($inicio, $fin){

    $start = new DateTime($inicio);
    $end = new DateTime($fin);
    //calculos de diferencia en periodos
    $endDayForCalc = new DateTime($fin);
    $startDayForCalc = new DateTime($inicio);
    $auxStartDayForCalc = new DateTime($inicio);
    //calcula el periodo
    $periodStart = period($start->format('d'));
    $periodEnd = period($end->format('d'));
    //calcula los dias
    $end->modify('+1 day');
    $interval = $end->diff($start);
    $days = $interval->days;
    $period = new DatePeriod($start, new DateInterval('P1D'), $end);
    $holidays = array();
    foreach($period as $dt) {
        $curr = $dt->format('D');
        if($curr == 'Sun') {
            $days--;
        }elseif (in_array($dt->format('Y-m-d'), $holidays)) {
            $days--;
        }
    }
    if($periodEnd > $periodStart) {
        $end->modify('-1 day');
        $endDayForCalc->setDate($endDayForCalc->format('Y'),$endDayForCalc->format('m'),15);
        $startDayForCalc->setDate($startDayForCalc->format('Y'),$startDayForCalc->format('m'),1);
        $workedDays = daysWeek($startDayForCalc->format('Y-m-d'), $start->format('Y-m-d'));
        $paidDays = daysWeek($start->format('Y-m-d'), $endDayForCalc->format('Y-m-d'));
        $diferentDayPeriod = daysWeek($endDayForCalc->format('Y-m-d'), $end->format('Y-m-d'));
        return response()->json(['totalDays'=>$days,'paidDays'=> $paidDays->original['days'], 'diferentDayPeriod'=>$diferentDayPeriod->original['days']-1,'workdedDays'=>$workedDays->original['days']+1]);
    }
    if($periodStart > $periodEnd) {
        $end->modify('-1 day');
        $endDayForCalc->setDate($startDayForCalc->format('Y'),$startDayForCalc->format('m'),30);
        $auxStartDayForCalc->setDate($auxStartDayForCalc->format('Y'),$auxStartDayForCalc->format('m'),16);
        $workedDays = daysWeek($auxStartDayForCalc->format('Y-m-d'), $start->format('Y-m-d'));
        $paidDays = daysWeek($start->format('Y-m-d'), $endDayForCalc->format('Y-m-d'));
        $diferentDayPeriod = daysWeek($endDayForCalc->format('Y-m-d'), $end->format('Y-m-d'));
        return response()->json(['totalDays'=>$days,'paidDays'=> $paidDays->original['days'], 'diferentDayPeriod'=>$diferentDayPeriod->original['days']-1,'workdedDays'=>$workedDays->original['days']+1]);
    }
    return response()->json(['paidDays'=>$days, 'workdedDays'=>15-$days, 'diferentDayPeriod'=>null]);
}
function datas_for_the_provision(){
    $total_payrolls =0;
    $total_accrued_without_aux=0;
    $total_accrued=0;
    //obtiene el id de la provision que esta actualmente por periodo mes y año
    $provision_id = Provision::whereYear('created_at', Carbon::now()->modify('-1 day')->format('Y'))
                            ->whereMonth('created_at', Carbon::now()->modify('-1 day')->format('m'))
                            ->where('period_id', period(Carbon::now()->modify('-1 day')->format('d')))
                            ->select('id')
                            ->first();

    if ($provision_id != null) {
        //obtiene las payrolls que tienen el id de la provision
        $payrolls = Payroll::where('provision_id',$provision_id->id)->get();
        //recorre nomina por nomina sacando el total devengado, deduccion y el neto a pagar
        foreach ($payrolls as $payroll) {
            $total_accrued_db = DB::table('concept_payroll')
                                ->join('concepts', 'concept_payroll.concept_id', 'concepts.id')
                                ->join('concept_types', 'concepts.concept_type_id', 'concept_types.id')
                                ->where('concept_payroll.payroll_id', $payroll->id)
                                ->where('concept_types.id', 1)
                                ->select(DB::raw('sum(concept_payroll.total_value) AS total'))
                                ->first();
            $total_deductio_db = DB::table('concept_payroll')
                                ->join('concepts', 'concept_payroll.concept_id', 'concepts.id')
                                ->join('concept_types', 'concepts.concept_type_id', 'concept_types.id')
                                ->where('concept_payroll.payroll_id', $payroll->id)
                                ->where('concept_types.id', 2)
                                ->select(DB::raw('sum(concept_payroll.total_value) AS total'))
                                ->first();
            $aux_transp = DB::table('concept_payroll')
                                ->join('concepts', 'concept_payroll.concept_id', 'concepts.id')
                                ->join('concept_types', 'concepts.concept_type_id', 'concept_types.id')
                                ->where('concept_payroll.payroll_id', $payroll->id)
                                ->where('concept_types.id', 1)
                                ->where('concept_payroll.concept_id', 2)
                                ->select(DB::raw('sum(concept_payroll.total_value) AS total'))
                                ->first();
            $total_payrolls += $total_accrued_db->total-$total_deductio_db->total;
            $total_accrued_without_aux += $total_accrued_db->total-$aux_transp->total;
            $total_accrued += $total_accrued_db->total;

        }
        return response()->json(['total_payroll'=> $total_payrolls, 'total_accrued_without_aux'=> $total_accrued_without_aux, 'total_accrued'=>$total_accrued, 'provision_id'=>$provision_id->id]);
    }else{
        return null;
    }
}
