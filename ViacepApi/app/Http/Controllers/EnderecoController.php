<?php

namespace App\Http\Controllers;

use App\Http\Requests\Endereco\SalvarRequest;
use App\Models\Enderecos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EnderecoController extends Controller
{
    public function index()
    {
        $enderecos = Enderecos::all();
        return view('listagem')->with([
            'enderecos' => $enderecos
        ]);
    }

    public function adicionar()
    {
        return view('busca');
    }

    public function buscar(Request $request)
    {
        $cep = $request->input('cep');
        $response = Http::get("viacep.com.br/ws/$cep/json/")->json();

        return view('adicionar')->with([
            'cep' => $request->input('cep'),
            'logradouro' => $response['logradouro'],
            'bairro' =>$response['bairro'],
            'cidade' =>$response['localidade'],
            'estado' =>$response['uf'],
        ]);
        
    }

    public function salvar(SalvarRequest $request)
    {
        $endereco = Enderecos::where('cep', $request->input('cep'))->first();

        if(!$endereco){

        

        Enderecos::create([
            'cep' => $request->input('cep'),
            'logradouro' => $request->input('logradouro'),
            'numero' => $request->input('numero'),
            'bairro' => $request->input('bairro'),
            'cidade' => $request->input('cidade'),
            'estado' => $request->input('estado'),
        ]);

        return redirect('/')->withSucesso('Endereco Salvo com Sucesso');

    }

        return redirect('/')->withErro('O endereço ja esta cadastrado');
    }
}
