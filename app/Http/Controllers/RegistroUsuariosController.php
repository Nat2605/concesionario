<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroUsuariosController extends Controller
{
    public function validar()
    {
        $datosValidados = request()->validate(['nombre' => ['required', 'min:5', 'max:10'], 'email' => ['required', 'email', 'min:5', 'max:20'], 'password' => ['required', 'min:5', 'max:15']]);

        $usuarios =  User::create([

            'name' => $datosValidados['nombre'],
            'email' => $datosValidados['email'],
            'password' => bcrypt($datosValidados['password'])

        ]);

        auth()->login($usuarios, true);

        return redirect('/login');
    }

    public function acceder()
    {
        $usuarioValido = request()->validate(['email' => ['required', 'email', 'min:5', 'max:20'], 'password' => ['required', 'min:5', 'max:15']]);

        // auth()->attempt(['password' => request('password')]);
        $validacion = auth()->attempt(['password' => $usuarioValido['password'], 'email' => $usuarioValido['email']]);

        if ($validacion) {
            request()->session()->regenerate();
            return redirect('/mi_concesionario');
        }
        return back();
    }
    public function logOut()
    {
        auth()->logout();

        return redirect('/');
    }
}
