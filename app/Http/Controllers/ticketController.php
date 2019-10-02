<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ticket; //Agrega la clase modelo

class ticketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('ticket.index');
        $tickets = ticket::all();

        //dd($tickets); //muestra lo que hay almacenado en la variable
        return view ('ticket.index', compact('tickets'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */                                                                                                                             
    public function create()
    {
        return view('ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ticket::create($request-> all()); //Crea un registro nuevo
        //return view('ticket.index');
        $tickets = ticket::all(); //Hace una instancia de ticket y lo trae todo
        return view ('ticket.index', compact('tickets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Hacer solo para un registro, hacer show para la descripcion 
        $tickets = ticket::find($id);
      // dd($id);
        return view('ticket.showDescripcion', compact('tickets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {//hay que probar a colocar esto en un modal
        //return view('ticket.update');
        $tickets=ticket::find($id);
        //dd($tcks);
        return view('ticket.edit',compact('tickets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[ 'titulo'=>'required', 'categoria'=>'required', 'descripcion'=>'required']);
 
        ticket::find($id)->update($request->all());
        return redirect()->route('ticket.index');//->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ticket::find($id)->delete();
        return redirect()->route('ticket.index');
    }
}
