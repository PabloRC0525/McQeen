@extends('index')

@section('contenido')
<editar class="flex justify-center align-middle mt-4">
  <div class="h-96 w-3/4 bg-gray-200 border-solid border-2 border-gray-700 mx-2 rounded-md flex justify-between items-center">
      
      <div class="h-60 w-60 ml-10 items-center rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full text-green-800">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
          </svg>
      </div>

      <div class="h-auto w-1/3 m-4 rounded-lg p-5 text-right">
          <div class="text-2xl text-green-800">Nombre</div>
          <input type="text" class="text-xl pb-6 text-gray-600 border-b-2 border-gray-400 px-2 rounded-xl focus:outline-none focus:border-green-600" value="Juan Antonio Montoya Ramirez" />
          <div class="text-2xl text-green-800">Departamento</div>
          <input type="text" class="text-xl text-gray-600 border-b-2 border-gray-400 p-2 rounded-xl focus:outline-none focus:border-green-600" value="Auxiliar de Servicios" />
          <button class="bg-blue-300 py-3 px-4 rounded-lg mt-5 hover:bg-blue-500 hover:text-gray-100"onclick="Guardar()">
              Guardar Cambios
          </button>
          <script>
            function Guardar() {
                // Aquí redirige a la vista 'user'
                window.location.href = 'user';
            }
        </script>
      </div>

      <div class="h-60 w-60 mr-10 items-center rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </svg>
      </div>

  </div>
</editar>
@endsection
