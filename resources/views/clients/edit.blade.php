@extends('clients.layout')

@section('content')
<div class="row">
    <div class="col-Ig-12 margin-tb">
        <div class="pull-left">
            <h2>Editare</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('clients.index') }}"> Back </a>
        </div>
    </div>
</div>

@if ($errors->any())

<div class="alert alert-danger">
    <strong>Ups!</strong>Exista o problema la datele introduse. <br><br>

    <ul>

        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach  
    </ul>
</div>

@endif

<form action="{{ route('clients.update', $client->id) }}" method="POST">


@csrf

@method('PUT')

<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Nume Client:</strong>
        <input type="text" name="nume" value="{{ $client->nume}}" class="form-control" placeholder="Nume">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>E-mail Client:</strong>
        <input type="text" name="email" value="{{ $client->email}}" class="form-control" placeholder="Email">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Telefon Client:</strong>
        <input type="text" name="email" value="{{ $client->telefon}}" class="form-control" placeholder="Email">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Comentarii Client:</strong>
        <input type="text" name="comentarii" value="{{ $client->comentarii}}" class="form-control" placeholder="Comentarii">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text center">
            <button type="submit" class="btn btn-primary">Trimite</button>
        </div>
    </div>
</form>

@endsection
