@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            {{ $operador->nombre }}
        </h1>
    </div>
    <div class="py-10 text-center">
            <div class="m-auto">

                <span class="text-uppercase text-blue-500 font-bold text-xs italic">
                    correo: {{ $operador->correo }}
                </span>

                <p class="text-lg text-gray-700 py-6">
                    {{ $operador->licencia }}
                </p>

                <hr class="mt-4 mb-8">

            </div>
    </div>
</div>
@endsection