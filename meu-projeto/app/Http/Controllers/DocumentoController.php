<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index()
    {
        // Lógica para listar documentos
        return view('documentos.index');
    }

    public function create()
    {
        // Lógica para criar um novo documento
        return view('documentos.create');
    }

    public function store(Request $request)
    {
        // Lógica para armazenar o documento
        // Exemplo: Documento::create($request->all());
        return redirect()->route('documentos.index');
    }

    public function show($id)
    {
        // Lógica para mostrar um documento específico
        return view('documentos.show', compact('id'));
    }

    public function edit($id)
    {
        // Lógica para editar um documento específico
        return view('documentos.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Lógica para atualizar o documento
        return redirect()->route('documentos.index');
    }

    public function destroy($id)
    {
        // Lógica para deletar o documento
        return redirect()->route('documentos.index');
    }
}
