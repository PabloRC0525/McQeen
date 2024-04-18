@extends('nav_aux')

@section('contenido')
<perfil class="flex justify-center align-middle">

    <div class="h-96 w-3/4 bg-green-100 border-solid border-2 border-gray-700 rounded-md flex justify-between items-center">
        
        <div class="h-60 w-60 rounded-full text-right">
          <div class="text-2xl text-green-800">Nombre</div>
          <div class="text-xl text-green-400">Juan Antonio Montoya Ramirez</div>

          <div class="text-2xl text-green-800">Departamento</div>
          <div class="text-xl text-green-400">Auxiliar de Servicios</div>


        </div>

        <div class="h-60 w-60 rounded-full flex flex-col">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </svg>

          <button onclick="EditarA()"class="bg-green-300 py-3 px-4 rounded-lg mt-5 hover:bg-green-500 hover:text-gray-100">
            Editar
          </button>
          <script>
            function EditarA() {
                // Aquí redirige a la vista 'user'
                window.location.href = 'edit_aux';
            }
        </script>

        </div>

        <div class="h-60 w-60 rounded-lg text-left">

          <div class="text-2xl text-green-800">Correo</div>
          <div class="text-xl pb-6 text-green-400">jamr.as@mc.com</div>

            <div class="text-2xl text-green-800">Número:</div>
            <div class="text-xl text-green-400">442-567-7867</div>

        </div>

    </div>

  </perfil>

@endsection