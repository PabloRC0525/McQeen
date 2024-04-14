@extends('nav_adm')

@section('contenido')
<div class="flex justify-center items-center">
<div class=" justify-center align-middle my-5 h-96 w-3/4 mx-2 rounded-md flex bg-gray-200 border-solid border-2 border-gray-700 ">
<div class="container mx-auto p-4 ">
    <div class="bg-gray-200 p-4 rounded-lg shadow-md">
      <div class="flex justify-between items-center">
        <h2 class="text-2xl font-bold">Departamento</h2>
        <div class="flex space-x-2">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
            Opciones
          </button>
          <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
            Eliminar
          </button>
        </div>
      </div>
      <div class="grid grid-cols-3 gap-4 mt-4">
        <div class="bg-white p-4 rounded-lg shadow-md">
          <h3 class="text-xl font-bold">Admin</h3>
          <p>
            <strong>Tickets:</strong>
            <span class="text-blue-500">0</span>
          </p>
          <p>
            <strong>Usuarios:</strong>
            <span class="text-blue-500">1</span>
          </p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md">
          <h3 class="text-xl font-bold">Vegetta</h3>
          <p>
            <strong>No. Quejas:</strong>
            <span class="text-blue-500">777</span>
          </p>
          <p>
            <strong>Tickets:</strong>
            <span class="text-blue-500">7</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  @endsection