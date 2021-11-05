<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->paginate(5);
        return view('clients.index', compact('clients'))->with('i',(request()->input('page', 1)-1) * 5);
    }

        public function create()
    {
        return view('clients.create');
    }
        public function store(Request $request)
    {
        $request->validate([
        'nume'=>'required',
        'email'=>'required',
        'telefon'=>'required',
        'comentarii'=>'required',
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index') ->with('success','Clientii au fost creati cu success.');
        }
            public function show(Client $client)
        {
            return view('clients.show',compact('client'));
        }
        public function edit(Client $client)
        {
            return view('clients.edit',compact('client'));
        }
        public function update(Request $request, Client $client)
        {
            $request->validate([
            ]);

            $client->update($request->all());

            return redirect()->route('clients.index')
            ->with('success', 'Clientul a fost updatat cu success');
        }

        public function destroy(Client $client)
        {
            

            $client->delete();
            return redirect()->route('clients.index')
            ->with('success', 'Clientul a fost sters cu success');
        }


}
