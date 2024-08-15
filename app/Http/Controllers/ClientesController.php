<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::orderBy('id', 'ASC')->get();

        return view('clientes', compact('clientes'));
    }

    public function create(){
        return view('clientes.create', [
            'cliente' => new Cliente
        ]);
    }

    public function edit(Cliente $id){
        return view('clientes.edit', [
            'cliente' => $id
        ]);
    }

    public function update(Cliente $id, CreateClienteRequest $request){
        $id->update($request->validated());

        return redirect()->route('clientes.show', $id);
    }

    public function store(CreateClienteRequest $request){
        Cliente::create($request->validated());

        return redirect()->route('clientes.index');
    }

    public function show($id){
        return view('clientes.show', ['cliente' => Cliente::find($id)]);
    }

    public function destroy(Cliente $cliente){
        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}
