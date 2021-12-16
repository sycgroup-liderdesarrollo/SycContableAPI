<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user=User::all();
        return $user;
    }
    public function store(CreateUserRequest $request)
    {
        $user = $request->all();

        $user['password'] = Hash::make($request->password); //encripta la contraseña

        $user = User::create($user); //creara el usuario con los datos ya validados y contraseña encriptada

        return $user;
    }
    public function show(User $user)
    {
        $user->businessLine;
        $user->position;
        $user->contractType;
        $user->salaryType;
        $user->headquarter;
        $user->identificationType;
        return $user;
    }
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        return $user;
    }
    public function destroy(User $user)
    {
        $user->delete();
        return $user;
    }

}
