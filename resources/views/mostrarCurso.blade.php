@extends('layouts.app')
@section('content')

   
<div class="container" id="mi_tabla" >
 <dd class="col-sm-9"><h4 style="color: #5DADE2"><b> MATRICULA</b></h4></dd>
<table class="table table-bordered" >
    <thead> 
     <tr>
        <th>NOMBRE</th>
        <th>CICLO</th>
        <th>FACULTAD</th>
        <th>CODIGO</th>
        <th style="color: rgb(20, 209, 20)"><b> MARCAR</b></th>

    </tr>
    </thead>
   <form method="POST" action="{{Route("matricula")}} ">
    <tbody>
        @foreach ($sql as $curso)
        <tr>
            @csrf
            <td>{{$curso->nombre}}</td>
             <td>{{$curso->ciclo}}</td>
             <td>{{$curso->facultad}}</td>
             <td>{{$curso->codigo}}</td>
             <TD >
                    <input class="form-check-input me-1"  type="checkbox" name="curso{{$curso->id}}" value="{{$curso->id}}">
             </TD>
        </tr>
            
        @endforeach
    </tbody>
      <td  colspan="5"><button type="submit" class="btn btn-success" >Guardar</button></td>
</form>
</div>
</table>
</div>



@endsection