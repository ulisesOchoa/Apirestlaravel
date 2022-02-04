<?php

namespace App\Http\Controllers;

use App\Models\UsuarioModel;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = new UsuarioModel();
        //listar testimonios
        $usuario = $usuarios->getAllUsuarioTestimonio();

        return $usuario->all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $usuario = new UsuarioModel();
        
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
