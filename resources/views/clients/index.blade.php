@extends ('clients.layout')

@section('content')

<div class= "pull-left">
    <h2>Sistem de gestionare clienti <h2>
</div>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">

        <div class="pull-right">
             <a class="btn btn-success" href="{{ route('clients.create')}}"> Adaugare client nou
             </a>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
<div class="alert alers-success">
    <p>{{$message}}</p>
</div>

@endif

<table class="table table-bordered">
    <tr>
        
        <th>Nume</th>
        <th>Email</th>
        <th>Telefon</th>
        <th>Comentarii</th>
        <th>Fisiere</th>
        
</tr>

@foreach ($clients as $clients)
<tr>
   
    <td>{{$clients->nume}}</td>
    <td>{{$clients->email}}</td>
    <td>{{$clients->telefon}}</td>
    <td>{{$clients->comentarii}}</td>
    <td>{{$clients->files}}

            <a class="btn btn-info" href="{{ route('facturi.show', $clients->id) }}">Vezi factura</a>
            <a class="btn btn-info" href="{{ route('facturi.create',['clientid'=>$clients->id]) }}">Creeaza factura</a>
    </td>

    <td>
        <form action="{{ route('clients.destroy', $clients->id) }}" method="POST">

        

                <a class="btn btn-info" href="{{ route('clients.edit', $clients->id) }}">Edit</a>

            @csrf

            @method('DELETE')

            <button type="submit" class="btn btn-danger" >Delete</button>

            
        </form>
    </td>
</tr>

@endforeach
</table>
