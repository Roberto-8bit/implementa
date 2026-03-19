<?php

namespace App\Http\Controllers;
use App\Models\Telefono;
use App\Models\Cliente;
use Illuminate\Http\Request;

class TelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cliente=Cliente::find($id);
        $telefonos=Telefono::all();
        return view('telefono.index')->with('dTelefonos',$telefonos)->with('infoCliente',$cliente);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('telefono.create');
    }
      public function crear(string $id)
    {
        //
        return view('telefono.create')->with('codigoCliente',$id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $nuevoTelefono=new Telefono;
        $nuevoTelefono->codigoCliente=$request->get('codigoCliente');
        $nuevoTelefono->numero=$request->get('numero');
        $nuevoTelefono->save();
        return redirect('/cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
         $cliente=Cliente::find($id);
        $telefonos=Telefono::all();
        return view('telefono.index')->with('dTelefonos',$telefonos)->with('infoCliente',$cliente);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    }
}
