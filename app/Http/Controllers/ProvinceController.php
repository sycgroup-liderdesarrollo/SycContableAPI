<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;
/**
 * @group Province
 */
class ProvinceController extends Controller
{
    /**
     * @header X-Tenant 123
     * @queryParam filter Field to filter by danecode, name and prefix properties
     * @queryParam active Field to sort by active property
     * @queryParam startDate Field to sort by specific date
     * @queryParam endDate Field to sort by lapse date. Keep in mind that startDate Field must be present
     * @queryParam page Field to paginate data
     * @responseFile responses/provinces.get.json
     * @responseFile 400 responses/unidentified_tenant.json
     *
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter',null);
        $active = $request->query('active',null);
        $startDate = $request->query('startDate',null);
        $endDate = $request->query('endDate',null);
        $paginate = $request->query('paginate') ?? env('DEFAULT_PAGINATE', 10);

        $provinces = Province::without('cities')
                                    ->filter($filter)
                                    ->active($active)
                                    ->betweenDate($startDate,$endDate)
                                    ->paginate($paginate);
        return response()->json(['status'=>true,'data'=>$provinces]);

    }
}
