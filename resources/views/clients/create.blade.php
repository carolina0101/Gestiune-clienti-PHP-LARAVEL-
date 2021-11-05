@extends('clients.layout')

@section('content')

<div class="row">
    <div class="col-Ig-12 margin-tb">
        <div class="pull-right">
            <h2>Adauga un nou client<h2>
        </div>
            <div class="pull right">
                <a class="btn btn-primary" href="{{ route('clients.index') }}"> Back </a>
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

<form action="{{ route('clients.store') }}" method="POST">



    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nume Client:</strong>
                <input type="text" name="nume" class="form-control" placeholder="nume">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail Client:</strong>
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefon Client:</strong>
                <input type="text" name="telefon" class="form-control" placeholder="telefon">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Comentarii Client:</strong>
                <input type="text" name="comentarii" class="form-control" placeholder="comentarii">
            </div>
        </div>

      

        <div class="container">
            <div class="row">
                <div class="card">
                <strong>Factura Client:</strong>
                    <div class="card-header">
    
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @csrf
                        <div class="form-group">
                            <label form="file">Choose file</label>
                            <input type="file" name="files" class="form-control" placeholder="facturi">
                        
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text center">
            <button type="submit" class="btn btn-primary">Trimite</button>
        </div>
    </div>
</form>

@endsection
