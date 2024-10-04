<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function index()
    {
        $dados = Aluno::All();


        return view('aluno.list', data:[
            'dados'=>$dados
        ]);
    }

    function create()
    {
        return view('aluno.form');
    }



    function store(Request $request){

        $request->validate(
            [
                'nome'=>'required|max:130',
                'cpf'=>'required|max:14',
                'telefone'=>'required|max:20',
            ], [
                'nome.required' => "0 :attribute é obrigatório",
                'nome.max' => "0 :O máximo de caracteres para :attribute é 130",
                'nome.min' => "0 :O mínimo de caracteres para :attribute é 3",
                'cpf.required' => "0 :attribute é obrigatório",
                'cpf.max' => "0 :O máximo de caracteres para :attribute é 14",
                'telefone.required' => "0 :attribute é obrigatório",
                'telefone.max' => "0 :O máximo de caracteres para :attribute é 20",
            ]
        );

        //$data = $request->all();
        $data = [
            'nome'=> $request->nome,
            'cpf'=> $request->cpf,
            'telefone'=> $request->telefone,
        ];

        Aluno::create($data);
        return redirect('aluno');
    }

    function edit($id)
    {
        $dado = Aluno::find($id);

        return view('aluno.form', data: [
            'dado' => $dado
        ]);
    }

    function update(Request $request, $id){

        $request->validate(
            [
                'nome'=>'required|max:130',
                'cpf'=>'required|max:14',
                'telefone'=>'required|max:20',
            ], [
                'nome.required' => "0 :attribute é obrigatório",
                'nome.max' => "0 :O máximo de caracteres para :attribute é 130",
                'nome.min' => "0 :O mínimo de caracteres para :attribute é 3",
                'cpf.required' => "0 :attribute é obrigatório",
                'cpf.max' => "0 :O máximo de caracteres para :attribute é 14",
                'telefone.required' => "0 :attribute é obrigatório",
                'telefone.max' => "0 :O máximo de caracteres para :attribute é 20",
            ]
        );

        //$data = $request->all();
        $data = [
            'nome'=> $request->nome,
            'cpf'=> $request->cpf,
            'telefone'=> $request->telefone,
        ];

        Aluno::updateOrcreate(
            ['id'=>$id], $data);

        return redirect('aluno');
    }
}

