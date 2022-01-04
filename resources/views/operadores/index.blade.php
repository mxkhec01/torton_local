@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Operadores</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Operadores</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="m-auto w-4/5 py-24">
    <div class="pt-10">
        <a
            href="operadores/create"
            class="border-b-2 pb-2 border-dotted italic text-gray-500">
            Agregar un nuevo operador &rarr;
        </a>
    </div>


    <div class="w-5/6 py-10">
        @foreach ($operadores as $operador)
            <div class="m-auto">
                <div class="float-right">
                    <a href="operadores/{{ $operador->id }}"
                        class="border-b-2 pb-2 border-dotted italic text-green-500">
                      Mostrar &rarr;
                    </a>
                    <form action="/cars/{{ $operador->id }}" method="POST" class="pt-3">
                        @csrf
                        @method('delete')
                        <button type="submit"
                                class="border-b-2 pb-2 border-dotted italic text-red-500 ">
                                Delete &rarr;

                        </button>
                    </form>
                </div>
                <span class="text-uppercase text-blue-500 font-bold text-xs italic">
                    Nombre: {{ $operador->nombre }}
                </span>
                <h2 class="text-gray-700 text-5xl hover:text-gray-500">
                    <a href="/cars/{{ $operador->id }}">
                        {{ $operador->correo }}
                    </a>
                </h2>
                <p class="text-lg text-gray-700 py-6">
                    {{ $operador->email }}
                </p>

                <hr class="mt-4 mb-8">
            </div>
        @endforeach
    </div>
</div>
@endsection
