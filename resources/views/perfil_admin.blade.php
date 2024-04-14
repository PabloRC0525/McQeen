@extends('nav_adm')

@section('contenido')
<h1 class="text-2xl font-bold text-center">Mi Perfil</h1>
<perfil class="flex justify-center align-middle">

    <div class="h-96 w-3/4 bg-red-100 border-solid border-2 border-gray-700 rounded-md flex justify-between items-center">
        
        <div class="h-60 w-60 rounded-full text-right">
          <div class="text-2xl text-red-800">Nombre</div>
          <div class="text-xl text-red-400">Abril Ileana Sanchez Hernandez</div>

          <div class="text-2xl text-red-800">Departamento</div>
          <div class="text-xl text-red-400">Administrador</div>


        </div>

        <div class="h-60 w-60 rounded-full flex flex-col">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </svg>

          <button class="bg-red-300 py-3 px-4 rounded-lg mt-5 hover:bg-red-500 hover:text-gray-100"onclick=Edit()>
            Editar
          </button>
          <script>
            function Edit() {
                // Aquí redirige a la vista 'user'
                window.location.href = 'ed_admin';
            }
        </script>

        </div>

        <div class="h-60 w-60 rounded-lg text-left">

          <div class="text-2xl text-red-800">Correo</div>
          <div class="text-xl pb-6 text-red-400">abril@example.com</div>

            <div class="text-2xl text-red-800">Número:</div>
            <div class="text-xl text-red-400">442-567-7347</div>

        </div>

    </div>

  </perfil>
@endsection