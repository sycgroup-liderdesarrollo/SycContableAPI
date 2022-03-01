<?php

use Illuminate\Support\Facades\Log;

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
    function period($day)
    {
        if ($day >= 1 && $day <=15) {
            return 1;
        }
        elseif($day >= 16 && $day <=31){
            return 2;
        }else {
            return 0;
        }
    }
    function daysWeekForPayroll($inicio, $fin)
    {
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
