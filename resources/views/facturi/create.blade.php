
@extends ('facturi.layout')
<form action="{{ route('facturi.store') }}" method="POST">



    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nr factura:</strong>
                <input type="text" name="nrfactura" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data:</strong>
                <input type="date" name="data" class="form-control" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Serviciu facturat</strong>
                <input type="text" name="comentarii" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id</strong>
                <input type="text" name="idclient" class="form-control" readonly value="{{Request::get('clientid')}}">
            </div>
        </div>
        

        <div class="col-xs-12 col-sm-12 col-md-12 text center">
            <button type="submit" class="btn btn-primary">Trimite</button>
        </div>
    </div>
</form>