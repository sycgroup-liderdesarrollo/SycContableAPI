<?php

namespace App\Http\Controllers;

use App\Http\Resources\Convenant\CovenantTypeResource;
use App\Models\CovenantType;
use Illuminate\Http\Request;
/**
 * @group Covenant Type
 */
class CovenantTypeController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $paginate = $request->query('paginate') ?? 10;
        $covenantTypes = CovenantType::filter($filter)->paginate($paginate);
        return CovenantTypeResource::collection($covenantTypes);
    }
    /**
     * @bodyParam name string required El nombre del tipo de convenio, cuotas o permanente, ya viene definido. Example: Cuotas
     */
    public function store(Request $request)
    {
        $covenantType = CovenantType::create($request->all());
        return new CovenantTypeResource($covenantType);

    }
    public function show(CovenantType $covenantType)
    {
        $covenantType->covenant;
        return new CovenantTypeResource($covenantType);
    }
    /**
     * @bodyParam name string required El nombre del tipo de convenio, cuotas o permanente, ya viene definido. Example: Cuotas
     */
    public function update(Request $request, CovenantType $covenantType)
    {
        $covenantType->update($request->all());
        return new CovenantTypeResource($covenantType);
    }
    public function destroy(CovenantType $covenantType)
    {
        $covenantType->delete();
        return new CovenantTypeResource($covenantType);
    }
}
