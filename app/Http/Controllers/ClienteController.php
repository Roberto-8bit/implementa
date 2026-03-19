<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clientes=Cliente::all();
        return view('cliente.index')->with('dClientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $cliente=new Cliente();
        $cliente->codigoCliente=$request->get('codigoCliente');
        $cliente->nombreCliente=$request->get('nombreCliente');
        $cliente->ApellidoCliente=$request->get('apellidoCliente');
        $cliente->ciudadCliente=$request->get('ciudadCliente');

        $cliente->save();
        return redirect('/cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $cliente=Cliente::find($id);  
        return view('cliente.delete')->with('clienteE',$cliente);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $cliente=Cliente::find($id);
        return view('cliente.edit')->with('clienteE',$cliente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminado=Cliente::find($id);
        $eliminado->delete();

        return redirect('/cliente');
    }
}
