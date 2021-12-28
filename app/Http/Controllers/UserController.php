<?php

namespace App\Http\Controllers;

use App\Http\Requests\CovenantUser\CreateCovenantUserRequest;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();

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
        $user->businessLine;
        $user->position;
        $user->contractType;
        $user->salaryType;
        $user->headquarter;
        $user->identificationType;
        $user->covenants;
        $user->payroll;

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
        return response()->json(['status'=>true,'data'=>$user]);

    }
    public function asignarConvenio($id, $id2 , Request $request) //request para recibir dues, paid dues y values
    //$id es el id del usuario, $id2 es el id del convenio
    {
        $user = User::find($id); //encuentra al usuario
        $user->covenants()->attach($id2,$request->all()); //le asigna a ese usuario el id del convenio y todo lo que vaya en la request

        return response()->json(['status'=>true,'data'=>$user]);

    }

}
