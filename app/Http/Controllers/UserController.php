<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Http\Resources\UsersResource;
use App\Models\Covenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * @group User
 */
class UserController extends Controller
{
    /**
     * @queryParam filter Aplica filtro para el nombre. Example: Jhonatan
     * @queryParam active int Filtro para buscar por estado activo o inactivo 1=activo, 0=inactivo. Example: 1
     * @apiResourceCollection App\Http\Resources\UsersResource
     * @apiResourceModel App\Models\User
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $active = $request->query('active', null);
        $paginate = $request->query('paginate') ?? 10;
        $users = User::filter($filter)->active($active)->with('position')->paginate($paginate);
        return UsersResource::collection($users);
    }
    /**
     * @apiResource App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     */
    public function store(CreateUserRequest $request)
    {
        $user = $request->all();
        $user['password'] = Hash::make($request->password);
        $user = User::create($user);
        return new UserResource($user);
    }
     /**
     * @apiResource App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     */
    public function show(User $user)
    {   $user->covenants;
        return new UserResource($user);
    }
     /**
     * @apiResource App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->fill($request->all());
        $user->password = Hash::make($user->password);
        $user->save();
        return new UserResource($user);
    }
     /**
     * @apiResource App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     */
    public function destroy(User $user)
    {
        $user->delete();
        return new UserResource($user);
    }
    /**
     * @urlParam user_id int required El id del usuario. Example: 1
     * @bodyParam covenant_id int required El id2 del convenio. Example: 1
     * @bodyParam value int El valor de la cuota que se le va a cobrar a éste usuario unicamente. Example: 5000
     * @bodyParam dues int required Las deudas totales del usuario. Example: 9
     */
    public function asignarConvenio($user_id, Request $request)
    {
        $user = User::find($user_id);
        $value = Covenant::find($request->input('covenant_id'));

        foreach ($user->covenants as $userCovenat) {
            if ($value->covenant_type_id == 1){
                if ($userCovenat->pivot->dues != $userCovenat->pivot->paid_dues) {
                    return response()->json(['data'=> 'Todas las deudas aun no han sido pagadas']);
                }
            }
            if ($value->covenant_type_id == 2){
                if ($userCovenat->pivot->covenant_id == $value->id) {
                    return response()->json(['data'=> 'No se puede volver a cargar convenio permanente']);
                }
            }
        }
        if ($value->covenant_type_id == 2) {
            $user->covenants()->attach(['covenant_id'=>$request->covenant_id],['dues'=>0, 'paid_dues'=>0, 'value'=>$value->value]);
            return response()->json(['status'=>true,'data'=>"convenio asignado: '{$value->name}' al usuario '{$user->name}'"]);
        }
        else {
            $user->covenants()->attach(['covenant_id'=>$request->covenant_id],['dues'=>$request->dues, 'paid_dues'=>0, 'value'=>$request->value]);
            return response()->json(['status'=>true,'data'=>"convenio asignado: '{$value->name}' al usuario '{$user->name}'"]);
        }
    }

    /**
     * @urlParam user_id int required El id del usuario. Example: 1
     * @bodyParam covenant_pivot_id int required El id de la tabla pivot del registro que desea eliminar. Example: 1
     */
    public function eliminarConvenio($user_id, Request $request)
    {
        $user = User::find($user_id);
        foreach ($user->covenants as $userCovenat) {
            if ($userCovenat->pivot->id == $request->input('covenant_pivot_id')) {
                $user->covenants()->wherePivot('id', $request->input('covenant_pivot_id'))->detach();
                return response()->json(['status'=>true, 'data'=>"Se elimió el convenio en el usuario '{$user->name}'"]);
            }
        }
        return response()->json(['status' => true, 'data'=>"No se encontró coincidencia entre usuario e id del pivot"]);
    }
}
