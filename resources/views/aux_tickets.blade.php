@extends('nav_aux')
@section('contenido')
<tickets_aux class="flex justify-center align-middle my-5">

    <div class="h-96 w-3/4 bg-green-100 border-solid border-2 border-gray-700 mx-2 rounded-md flex">

      <div class="w-1/6 rounded-lg p-2 ml-4">

        <div class="bg-gray-100 border-r-0 border-solid border-2 border-gray-500 mt-3 ml-2 p-1 rounded-md w-full">
            003 Lim.              
        </div>
        <div class="bg-gray-300 border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
            091 Bug
        </div>
        <div class="bg-gray-300 border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
          013 Man.
        </div>

      </div>

      <div class="w-full bg-gray-100 my-4 mr-4 rounded-lg border-solid border-2 border-gray-500">
          <div class="bg-green-400 p-2 rounded-md">
            003 Lim.              
          </div>

          <div class="mr-4 ml-4 mt-3">
            <h2 class="text-xl font-medium">Limpieza</h2>
            <ul class="mt-4">
                <li class="text-l font-medium">
                  <p class="text-gray-600 text-s">No. Ticket: 003</p>
                </li>
                <li>
                  <p class="text-gray-700 text-s">Autor: José C.</p>
                </li>
                <li>
                  <p class="text-gray-700 text-s">Departamento: Administración</p>
                </li>
                <li>
                  <p class="text-gray-700 text-s">Fecha: 02/10/2022</p>
                </li>
                <li>
                  <p class="text-red-700 text-s">Clasificación: Importante</p>
                </li>
                <li>
                  <p class="text-gray-700 text-s">Status: Asignado</p>
                </li>
                <br>

                <select class="m-2 w-1/6 h-10 bg-green-500 border-2 border-gray-600 rounded-md text-center" name="Filtrar">
                  <option value="Asignado">Asignado</option>
                  <option value="Proceso" selected>Proceso</option>
                  <option value="Finalizado">Finalizado</option>
                </select>

                <button onclick="Mensajes()" class="m-2 w-1/6 h-10 bg-green-500 border-2 border-gray-600 rounded-md text-center ">
                  Contactar
                </button>
                <script>
                  function Mensajes() {
                      // Aquí redirige a la vista 'user'
                      window.location.href = 'msg_aux';
                  }
              </script>
            </ul>
          </div>
      </div>
    </div>

  </tickets_aux>
@endsection