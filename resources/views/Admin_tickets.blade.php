@extends('nav_adm')
@section('contenido')
<tickets class="flex justify-center align-middle my-5">

    <div class="h-96 w-3/4 bg-blue-100 border-solid border-2 border-gray-700 mx-2 rounded-md flex">

      <div class="w-1/6 rounded-lg p-2 ml-4">

         <br>
          <div class="bg-gray-100 border-r-0 border-solid border-2 border-gray-500 ml-2 p-1 rounded-md w-full">
              Limpieza              
          </div>
          <div class="bg-gray-300 border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
              Bug
          </div>
          <div class="bg-gray-300 border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
            Mantenim.
        </div>

      </div>

      <div class="w-full bg-gray-100 my-4 mr-4 rounded-lg border-solid border-2 border-gray-500">
          <div class="bg-blue-400 p-2 rounded-md">
            Limpieza              
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

              </ul>
              <br>
              <button onclick="Asignar()" class="bg-green-600 hover:bg-green-700 p-3 rounded-xl">Asignar</button>
              <script>
                function Asignar(){
                  window.location.href= 'Admin_asignacion'
                }
              </script>
            </div>
      </div>
    </div>
  
</tickets>
@endsection