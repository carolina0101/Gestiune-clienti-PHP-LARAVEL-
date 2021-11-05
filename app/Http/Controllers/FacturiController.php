<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Facturi;
use Illuminate\Http\Request;


class FacturiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facturi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
        'nrfactura'=>'required',
        'data'=>'required',
        'comentarii'=>'required',
        'idclient'=>'required',
        ]);

        Facturi::create(['nrfactura'=>$request->nrfactura,
                         'data'=>$request->data,
                         'idclient'=>$request->idclient,
                         'serviciufacturat'=>$request->comentarii]);
        
        return redirect()->route('facturi.show',$request->idclient);

        
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facturi  $facturi
     * @return \Illuminate\Http\Response
     */

    public function show($param1=10000)
    {
        
        $facturi = Facturi::where('idclient','=',$param1)->get();
        return view('facturi.show', compact('facturi'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facturi  $facturi
     * @return \Illuminate\Http\Response
     */
    public function edit(Facturi $facturi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facturi  $facturi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facturi $facturi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facturi  $facturi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facturi $facturi)
    {
        $idclient1= $facturi->idclient;
        $aux = Facturi::find($facturi)->first();
        if( $aux->delete() )
        {
            return redirect()->route('facturi.show',$idclient1);
        }
        else
        {
            echo ("n-o mers");
        }
        
    }




}
