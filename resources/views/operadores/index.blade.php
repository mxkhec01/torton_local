@extends('layouts.app')

@section('content') 
<!-- Content Header (Page header) -->

<!-- /.content-header -->
<div class="container m-auto w-4/5 py-24">
  <div class="row">
    <!--<div class="col-4 float-right offset-8 mb-5">-->
      <div class="col-4 mb-5">
      <a class="btn btn-primary" href="operadores/create" role="button"><i class="fas fa-plus"></i> Agregar Operador</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <table id="mytable" class="table table-bordred table-striped">
          <thead>
            <th>Nombre</th>
            <th>Licencia</th>
            <th>Correo</th>
            <th>Usuario</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Borrar</th>
              </thead>
          <tbody>
            @foreach ($operadores as $operador)
            <tr>
              <td>{{ $operador->nombre }} </td>
              <td>{{ $operador->licencia }} </td>
              <td><a href="mailto:{{ $operador->correo }}">{{ $operador->correo }}</a></td>
              <td>{{ $operador->app_usr }} </td>
              <td><p data-placement="top" data-toggle="tooltip" title="Ver">
                <a href="operadores/{{ $operador->id }}" class="btn btn-success btn-xs" role="button"><i class="far fa-eye"></i></a>
              </p></td>
              <td><p data-placement="top" data-toggle="tooltip" title="Edit">
                  <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fas fa-pencil-alt"></span></button>
                </p></td>
              <td><p data-placement="top" data-toggle="tooltip" title="Delete">
                  <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="far fa-trash-alt"></span></button>
                </p></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Editar el registro</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input class="form-control " type="text" placeholder="Nombre">
        </div>
        <div class="form-group">
          <input class="form-control " type="text" placeholder="Licencia">
        </div>
        <div class="form-group">
          <textarea rows="2" class="form-control" placeholder="Correo"></textarea>
        </div>
        <div class="form-group">
          <textarea rows="2" class="form-control" placeholder="Usuario"></textarea>
        </div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Actualizar</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Borrar este registro</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> ¿Seguro que quieres eliminar este registro?</div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Aceptar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!--CAMBIO DE FORMA-->
<div class="m-auto w-4/5 py-24">
  <div class="pt-10"> <a href="operadores/create" class="border-b-2 pb-2 border-dotted italic text-gray-500"> Agregar un nuevo operador &rarr; </a> </div>
  <div class="w-5/6 py-10">
    @foreach ($operadores as $operador)
    <div class="m-auto">
      <div class="float-right"> <a href="operadores/{{ $operador->id }}" class="border-b-2 pb-2 border-dotted italic text-green-500"> Mostrar &rarr; </a>
        <form action="/cars/{{ $operador->id }}" method="POST" class="pt-3">
          @csrf
          @method('delete')
          <button type="submit" class="border-b-2 pb-2 border-dotted italic text-red-500 "> Delete &rarr; </button>
        </form>
      </div>
      <span class="text-uppercase text-blue-500 font-bold text-xs italic"> Nombre: {{ $operador->nombre }} </span>
      <h2 class="text-gray-700 text-5xl hover:text-gray-500"> <a href="/cars/{{ $operador->id }}"> {{ $operador->correo }} </a> </h2>
      <p class="text-lg text-gray-700 py-6"> {{ $operador->email }} </p>
      <hr class="mt-4 mb-8">
    </div>
    @endforeach
  </div>
</div>
@endsection 