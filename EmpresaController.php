<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\http\Requests\EmpresaRequest;

use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function empresa(){

        $subtitulo = 'Lista da Empresa';


        $empresa = Empresa::all();




        return view('Admin.empresa.index', compact('subtitulo', 'empresa'));
    }

    public function formAdicionar()
    {
        return view('Admin.Empresa.form');
    }

    public function adicionar(EmpresaRequest $request)
    {



        Empresa::create($request->all());

        $request->session()->flash('sucesso', "Funcionário $request->nome incluído com sucesso!");

        return redirect()->route('admin.empresas.listar');

    }
}
