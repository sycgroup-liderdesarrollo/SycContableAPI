<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nómina</title>
    <style>
        #table{
            width: 100%;
            table-layout: auto;
            border-collapse: collapse;
        }
        #table-head{
            width: 100%;
            table-layout: auto;
            border-collapse: collapse;
        }

        #thead{
            border: 1px solid;
            background-color: rgb(220, 220, 220);
        }
        #tbody{
            text-align: center;
            border: 1px solid;
        }
        #td{
            border: 1px solid;
            font-size: medium
        }
        #th{
            border: 1px solid;
        }
        #total{
            margin: auto;
            padding:auto;
            background-color: rgb(220, 220, 220);
        }
        #sub-text{
            color: rgb(85, 85, 85);
        }
    </style>
</head>
<body>
<h1>Nómina de {{$payroll->user->name}} {{$payroll->user->last_name}}</h1>
<br>
    <table id="table-head">
        <tr>
            <th>
                <img width="100px" src="https://media-exp1.licdn.com/dms/image/C560BAQFjWmGTmZL-bw/company-logo_200_200/0/1596636307248?e=2159024400&v=beta&t=BIz4ner1q2khkSTXb7zDhByPxqOjsb7fbkARbecpq1o" alt="">
            </th>
            <th>
                <p>NIT: 123524581</p>
            </th>
            <th>
                <h4><strong>Empresa: </strong>  S&C GROUP S.A.S</h4>
            </th>
        </tr>
    </table>
<br>
    <table id="table-head">
        <tr>
            <th>
                <h4>C.C: <strong id="sub-text">{{$payroll->user->identification_number}}</strong></h4>
            </th>
            <th>
                <h4>Id de nomina: <strong id="sub-text"> {{$payroll->id}}</strong></h4>
            </th>
            <th>
                <h4>Fecha: <strong id="sub-text">{{$payroll->created_at}}</strong></h4>
            </th>
            <th>
                <h4>Periodo: <strong id="sub-text">{{$payroll->period->name}}</strong></h4>
            </th>
        </tr>
    </table>
    <table id="table">
        <thead id="thead">
            <tr>
                <th id="th">Codigo</th>
                <th id="th">Concepto</th>
                <th id="th">Cant.</th>
                <th id="th">Valor unitario</th>
                <th id="th">Devengado</th>
                <th id="th">Deducido</th>
            </tr>
        </thead>
        <tbody id="tbody">
            @foreach ($payroll->concepts as $concept)
                <tr>
                    <td id="td">
                        {{$concept->id}}
                    </td>
                    <td id="td">
                        {{$concept->name}}
                    </td>
                    <td id="td">
                        {{$concept->pivot->count}}
                    </td>
                    <td id="td">{{number_format($concept->pivot->unit_value,2)}}</td>
                    @if ( $concept->concept_type_id == 1 )
                        <td id="td">{{ number_format($concept->pivot->total_value,2) }}</td>
                        <td id="td"></td>
                    @elseif ( $concept->concept_type_id == 2 )
                        <td id="td"></td>
                        <td id="td">{{ number_format($concept->pivot->total_value,2) }}</td>
                    @endif
                </tr>
            @endforeach
            <tr>
                <td id="td" colspan="4"></td>
                <td id="td"> {{ number_format($devengado = $payroll->concepts->where('concept_type_id',1)->sum('pivot.total_value'),2) }}</td>
                <td id="td"> {{ number_format($deducido = $payroll->concepts->where('concept_type_id',2)->sum('pivot.total_value'),2) }}</td>
            </tr>
            <tr>
                <td colspan="4">TOTAL A PAGAR</td>
                <td colspan="2" id="total">{{ number_format($devengado - $deducido,2) }} </td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>
