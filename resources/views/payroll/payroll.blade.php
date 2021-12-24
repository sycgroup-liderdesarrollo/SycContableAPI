<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Nomina de {{$payroll->user->name}}</h1>

    <h4>Id de nomina: {{$payroll->id}}</h4>

    <h4>Fecha: {{$payroll->created_at}}</h4>

    <h4>Periodo: {{$payroll->period->name}}</h4>

<table border=1>
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Concepto</th>
            <th>Cant.</th>
            <th>Valor unitario</th>
            <th>Devengado</th>
            <th>Deducido</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($payroll->concepts as $concept)
            <tr>
                <td>
                    {{$concept->id}}
                </td>
                <td>
                    {{$concept->name}}
                </td>
                <td>
                    {{$concept->pivot->count}}
                </td>
                <td>{{number_format($concept->pivot->unit_value,2)}}</td>
                @if ( $concept->concept_type_id == 1 )
                    <td>{{ number_format($concept->pivot->total_value,2) }}</td>
                    <td></td>
                @elseif ( $concept->concept_type_id == 2 )
                    <td></td>
                    <td>{{ number_format($concept->pivot->total_value,2) }}</td>
                @endif
            </tr>
        @endforeach
        <tr>
            <td colspan="4"></td>
            <td> {{ number_format($devengado = $payroll->concepts->where('concept_type_id',1)->sum('pivot.total_value'),2) }}</td>
            <td> {{ number_format($deducido = $payroll->concepts->where('concept_type_id',2)->sum('pivot.total_value'),2) }}</td>
        </tr>
        <tr>
            <td colspan="4">TOTAL A PAGAR</td>
            <td colspan="2" style="margin: auto; padding:auto">{{ number_format($devengado - $deducido,2) }} </td>
        </tr>
    </tbody>
</table>
</body>
</html>
