

@extends ('facturi.layout')
<table class="table table-bordered">
    <tr>
        
        <th>idclient</th>
        <th>data</th>
        <th>nrfactura</th>
        <th>serviciufacturat</th>
        
</tr>

@foreach ($facturi as $facturi)
<tr>
   
    <td>{{$facturi->idclient}}</td>
    <td>{{$facturi->data}}</td>
    <td>{{$facturi->nrfactura}}</td>
    <td>{{$facturi->serviciufacturat}}</td>
    <td>
    <form action="{{ route('facturi.destroy', $facturi) }}" method="POST">


            @csrf

            @method('DELETE')

            <button type="submit" class="btn btn-danger" >Delete</button>

            
        </form>
</td>
</tr>
@endforeach

</table>