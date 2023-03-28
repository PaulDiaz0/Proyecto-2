@extends('layouts.windmill')
@section('contenido')
    

</h4>

    <h4
        class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Registro de equipos
    </h4>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            @if ($errors->any())
            <div class="min-w-0 p-4 text-white bg-red-600 rounded-lg shadow-xs">
                <h4 class="mb-4 font-semibold">
                    DEBE LLENAR TODOS LOS CAMPOS CORRESPONDIENTES, DE LO CONTRARIO NO SE REGISTRARA EL EQUIPO
                 </h4>
            <p>
                <ul>
                    @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </p>
          </div>    
            
            @endif
            
            
            
            @if (@isset($equipo))
                <form action="{{route('equipo.update', $equipo)}}" method="POST">
                 @method('PATCH')
        
                @else
                <form action="{{route('equipo.store')}}" method="POST">
 
                @endif

                 @csrf


                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Nombre:</span>
                    <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            type="text"
                            name="nombre"
                            id="nombre"
                            value="{{old('nombre') ?? $equipo->nombre ?? ''}}"

                    />
                    @error('nombre')
                        <span class="text-xs text-red-600 dark:text-red-400">{{$message}}</span>
                    @enderror
                </label>

                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Liga:</span>
                    <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            type="text"
                            name="liga"
                            id="liga"
                            value="{{old('liga') ?? $equipo->liga ?? ''}}"

                    />
                    @error('liga')
                        <span class="text-xs text-red-600 dark:text-red-400">{{$message}}</span>
                    @enderror
                </label>

                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Pais</span>
                     <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            type="text"
                            name="pais"
                            id="pais"
                            value="{{old('pais') ?? $equipo->pais ?? ''}}"

                         />
                         @error('pais')
                        <span class="text-xs text-red-600 dark:text-red-400">{{$message}}</span>
                    @enderror
                </label>

        
            <div class="mt-4">
                <input  
                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    type="submit" 
                    value="Guardar"
                
                />
                </input>
            </div>

             </form>
        </div>
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            <a class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            href="{{route('equipo.index')}}">
            Regresar a listado de equipos
        </a>
@endsection