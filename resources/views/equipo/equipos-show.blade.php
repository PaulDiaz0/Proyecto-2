@extends('layouts.windmill')
@section('contenido')

<h1 class="mb-6 text-lg font-semibold text-gray-600 dark:text-gray-300">
              Detalle del equipo
</h1>

<div class="grid gap-6 mb-8 md:grid-cols-2">
    <div
      class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
    >
      <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
        {{$equipo->nombre}}
      </h4>
      <p class="text-gray-600 dark:text-gray-400">
        <ul>
            <li>Liga: {{$equipo->liga}}</li>
            <li>Pais: {{$equipo->pais}}</li>
        </ul>
      </p>
    </div>
    
  </div>

    <form action="{{route('equipo.destroy', $equipo)}}" method="POST">
        @csrf
        @method('DELETE')
        <div class="mt-4">
            <input  
            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                type="submit" 
                value="Eliminar"
            
            />
            </input>
        </div>    
        
    </form>

    <br>
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        <a class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
        href="{{route('equipo.index')}}">
        Regresar a listado de equipos
    </a>
@endsection