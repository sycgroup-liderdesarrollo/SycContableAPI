<?php

use App\Models\Payroll;
use App\Models\Provision;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

    $start  = new DateTime($inicio);
    $end    = new DateTime($fin);
    //calculos de diferencia en periodos
    $endDayForCalc      = new DateTime($fin);
    $startDayForCalc    = new DateTime($inicio);
    $auxStartDayForCalc = new DateTime($inicio);
    //calcula el periodo
    $periodStart = period($start->format('d'));
    $periodEnd   = period($end->format('d'));
    //calcula los dias
    $end->modify('+1 day');
    $interval = $end->diff($start);
    $days     = $interval->days;
    $period   = new DatePeriod($start, new DateInterval('P1D'), $end);
    $holidays = array();

    foreach($period as $dt) {
        $curr = $dt->format('D');
        if($curr == 'Sun') {
            $days--;
        }elseif (in_array($dt->format('Y-m-d'), $holidays)) {
            $days--;
        }
    }
    if(($periodEnd > $periodStart) && ($start->format('m') == $end->format('m'))) {
        $end->modify('-1 day');
        $endDayForCalc->setDate($endDayForCalc->format('Y'),$endDayForCalc->format('m'), 15);
        $startDayForCalc->setDate($startDayForCalc->format('Y'),$startDayForCalc->format('m'), 1);
        $workedDays         = daysWeek($startDayForCalc->format('Y-m-d'), $start->format('Y-m-d'));
        $paidDays           = daysWeek($start->format('Y-m-d'), $endDayForCalc->format('Y-m-d'));
        $diferentDayPeriod  = daysWeek($endDayForCalc->format('Y-m-d'), $end->format('Y-m-d'));
        return response()->json(['totalDays'=> $days,'paidDays'=> $paidDays->original['days'], 'diferentDayPeriod'=> $diferentDayPeriod->original['days'],'workdedDays'=> $workedDays->original['days'] + 1]);
    }
    if(($periodStart > $periodEnd)) {
        if (($start->modify('+17 days')->format('m') == $end->format('m'))) {
            $start->modify('-17 days');
            $end->modify('-1 day');
            $endDayForCalc->setDate($startDayForCalc->format('Y'),$startDayForCalc->format('m'),  $startDayForCalc->modify('last day of')->format('d'));
            $auxStartDayForCalc->setDate($auxStartDayForCalc->format('Y'),$auxStartDayForCalc->format('m'), 16);
            $workedDays         = daysWeek($auxStartDayForCalc->format('Y-m-d'), $start->format('Y-m-d'));
            $paidDays           = daysWeek($start->format('Y-m-d'), $endDayForCalc->format('Y-m-d'));
            $diferentDayPeriod  = daysWeek($endDayForCalc->format('Y-m-d'), $end->format('Y-m-d'));
            return response()->json(['totalDays'=> $days,'paidDays'=> $paidDays->original['days'], 'diferentDayPeriod'=> $diferentDayPeriod->original['days'] - 1, 'workdedDays'=> $workedDays->original['days'] +1]);
        }else {
            $start->modify('-17 days');
        }
    }
    if (($periodStart == $periodEnd) && ($start->format('m') == $end->format('m'))) {
        return response()->json(['paidDays'=> $days, 'workdedDays'=> 15 - $days, 'diferentDayPeriod'=> null]);
    }
    if (($periodStart == $periodEnd) && ($start->format('m') != $end->format('m'))) {
        $end->modify('-1 day');
        if ($periodStart == 1) {
            $endDayForCalc->setDate($startDayForCalc->format('Y'),$startDayForCalc->format('m'), 15);
            $startDayForCalc->setDate($startDayForCalc->format('Y'),$startDayForCalc->format('m'), 1);
            $paidDays           = daysWeek($start->format('Y-m-d'), $endDayForCalc->format('Y-m-d'));
            $workedDays         = daysWeek($startDayForCalc->format('Y-m-d'), $start->format('Y-m-d'));
            $diferentDayPeriod  = daysWeek($endDayForCalc->format('Y-m-d'), $end->format('Y-m-d'));
            return response()->json(['totalDays'=> $days, 'paidDays'=>$paidDays->original['days'],'workdedDays'=>$workedDays->original['days'] +1, 'diferentDayPeriod'=> $diferentDayPeriod->original['days'] - 1]);
        }else {
            $endDayForCalc->setDate($startDayForCalc->format('Y'),$startDayForCalc->format('m'),  $startDayForCalc->modify('last day of')->format('d'));
            $auxStartDayForCalc->setDate($auxStartDayForCalc->format('Y'),$auxStartDayForCalc->format('m'), 16);
            $workedDays         = daysWeek($auxStartDayForCalc->format('Y-m-d'), $start->format('Y-m-d'));
            $paidDays           = daysWeek($start->format('Y-m-d'), $endDayForCalc->format('Y-m-d'));
            $diferentDayPeriod  = daysWeek($endDayForCalc->format('Y-m-d'), $end->format('Y-m-d'));
            return response()->json(['totalDays'=> $days, 'paidDays'=>$paidDays->original['days'],'workdedDays'=>$workedDays->original['days'] +1, 'diferentDayPeriod'=> $diferentDayPeriod->original['days'] - 1]);
        }
    }
    if (($periodStart != $periodEnd) && ($start->format('m') != $end->format('m'))) {
        $end->modify('-1 day');
        if ($periodStart == 1) {
            $endDayForCalc->setDate($start->format('Y'),$start->format('m'), 15);
            $startDayForCalc->setDate($startDayForCalc->format('Y'),$startDayForCalc->format('m'), 1);
            $workedDays         = daysWeek($startDayForCalc->format('Y-m-d'), $start->format('Y-m-d'));
            $paidDays           = daysWeek($start->format('Y-m-d'), $endDayForCalc->format('Y-m-d'));
            $diferentDayPeriod  = daysWeek($endDayForCalc->format('Y-m-d'), $end->format('Y-m-d'));
            return response()->json(['totalDays'=> $days,'paidDays'=> $paidDays->original['days'], 'workdedDays'=> $workedDays->original['days'] +1,'diferentDayPeriod'=> $diferentDayPeriod->original['days'] - 1]);
        }
        else {
            $endDayForCalc->setDate($auxStartDayForCalc->format('Y'),$auxStartDayForCalc->format('m'),  $auxStartDayForCalc->modify('last day of')->format('d'));
            $auxStartDayForCalc->setDate($start->format('Y'),$start->format('m'), 16);
            $workedDays         = daysWeek($auxStartDayForCalc->format('Y-m-d'), $start->format('Y-m-d'));
            $paidDays           = daysWeek($start->format('Y-m-d'), $endDayForCalc->format('Y-m-d'));
            $diferentDayPeriod  = daysWeek($endDayForCalc->format('Y-m-d'), $end->format('Y-m-d'));
            return response()->json(['totalDays'=> $days, 'paidDays'=>$paidDays->original['days'],'workdedDays'=>$workedDays->original['days'], 'diferentDayPeriod'=> $diferentDayPeriod->original['days'] - 1]);
        }
    }
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

function saveFile($file,$directory, $name)
{
    $data = explode( ',', $file);
        $format = explode(';',$data[0]);
        $format = explode('/',$format[0]);
        $name = str_replace(' ','_',$name);

        $path = $directory.'/'.time().'_'.$name.'.'.$format[1];
        Storage::disk('public')->put($path,base64_decode($data[1]));
        return 'storage/'.$path;
}
function deleteFile($path){
    $path = str_replace('storage','public',$path);
    Storage::delete([$path]);
}
