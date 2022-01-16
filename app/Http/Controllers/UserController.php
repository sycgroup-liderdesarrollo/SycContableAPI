<?php

namespace App\Http\Controllers;

use App\Http\Requests\CovenantUser\CreateCovenantUserRequest;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
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
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter', null);
        $active = $request->query('active', null);

        $users = User::filter($filter)->active($active)->with('position')->get();

        return response()->json(['status'=>true,'data'=>$users]);
    }
    public function store(CreateUserRequest $request)
    {
        $user = $request->all();

        $user['password'] = Hash::make($request->password); //encripta la contraseña

        $user = User::create($user); //creara el usuario con los datos ya validados y contraseña encriptada

        return response()->json(['status'=>true,'data'=>$user]);
    }
    public function show(User $user)
    {
        return response()->json(['status'=>true,'data'=>$user]);
    }
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        return response()->json(['status'=>true,'data'=>$user]);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return $user;
    }
    /**
     * @urlParam id int required El id del usuario. Example: 1
     * @urlParam id2 int required El id2 del convenio. Example: 1
     * @bodyParam dues int required Las deudas totales del usuario. Example: 9
     * @bodyParam paid_dues int required Las deudas pagadas del usuario. Example: 9
     * @bodyParam value int required El valor de cada deuda. Example: 9
     */
    public function asignarConvenio($id, $id2 , Request $request) //request para recibir dues, paid dues y values
    //$id es el id del usuario, $id2 es el id del convenio
    {
        $user = User::find($id); //encuentra al usuario
        $user->covenants()->attach($id2,$request->all()); //le asigna a ese usuario el id del convenio y todo lo que vaya en la request

        return response()->json(['status'=>true,'data'=>$user]);

    }

}
