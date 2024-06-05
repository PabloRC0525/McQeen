@extends('nav_adm')

@section('contenido')
<div class="flex justify-center items-center">
<div class=" justify-center align-middle my-5 h-96 w-3/4 mx-2 rounded-md flex bg-gray-200 border-solid border-2 border-gray-700 ">
<div class="container mx-auto p-4 ">
    <div class="bg-gray-200 p-4 rounded-lg shadow-md">
      <div class="flex justify-between items-center">
        <h2 class="text-2xl font-bold">Departamento</h2>
        <div class="flex space-x-2">
          <button onclick="Añadir()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">
            Añadir
          </button>
          <script>
            function Añadir() {
                // Aquí redirige a la vista 'user'
                window.location.href = 'nuevo_dep';
            }
        </script>

          
        </div>
      </div>
      <div class="grid grid-cols-3 gap-4 mt-4">
        <div class="bg-white p-4 rounded-lg shadow-md">
          <h3 class="text-xl font-bold">Admin</h3>
          <p>
            <strong>No. Quejas:</strong>
            <span class="text-blue-500">0</span>
          </p>
          <p>
            <strong>Tickets:</strong>
            <span class="text-blue-500">0</span>
          
          </p>
          <p>
            <strong>Usuarios:</strong>
            <span class="text-blue-500">1</span>
          </p>
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
            Editar
          </button>
          <button onclick="Eliminar()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
            Eliminar
          </button>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md">
          <h3 class="text-xl font-bold">Vegetta</h3>
          <p>
            <strong>No. Quejas:</strong>
            <span class="text-blue-500">7</span>
          </p>
          <p>
            <strong>Tickets:</strong>
            <span class="text-blue-500">7</span>
          </p>
          <p>
            <strong>Usuarios:</strong>
            <span class="text-blue-500">7</span>
          </p>
          <button onclick="Edit()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
            Editar
          </button>
          <button onclick="Eliminar()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
            Eliminar
          </button>

          <script>
            function Edit() {
                // Aquí redirige a la vista 'user'
                window.location.href = 'edit_dep';
            }
        </script>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script>
  function Eliminar() {
      // Simula la solicitud de guardar (aquí puedes agregar lógica de guardado)
      // Muestra SweetAlert cuando se completa la acción
      Swal.fire({
          icon: 'success',
          title: 'Departamento Agregado',
          text: 'El departamento se ha agregado correctamente.',
          confirmButtonText: 'Ok'
      }).then((result) => {
          // Redirige a la página Admin_Usuarios después de hacer clic en OK
          if (result.isConfirmed) {
              window.location.href = 'Admin_dep';
          }
      });
  }
</script>
  @endsection