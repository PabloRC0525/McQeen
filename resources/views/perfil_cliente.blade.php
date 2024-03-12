@extends('index')

@section('contenido')
<div class="flex items-center justify-center min-h-screen">
  <div class="w-3/4 h-80 bg-gray-100 p-8 rounded-lg shadow-md">
    <div class="p-5 border-b-2">
      <div class="flex justify-between items-center">
        <div class="w-3/4">
          <div class="flex items-center p-4 bg-white border rounded-lg mt-1">
            <img src="https://via.placeholder.com/150" alt="Client profile picture" class="w-24 h-24 rounded-full">
            <div class="ml-6">
              <h2 class="text-2xl font-bold text-gray-800">Juan Antonio Montoya Ramírez</h2>
              <p class="text-gray-600">Client</p>
              <div class="flex justify-end mt-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" onclick="Edit()">Edit User</button>
                <script>
                  function Edit() {
                      // Aquí redirige a la vista 'user'
                      window.location.href = 'editar';
                  }
              </script>
              </div>
            </div>
          </div>
        </div>
        <div class="w-7/12 ml-8">
          <div class="mt-4">
            <h3 class="text-xl font-semibold text-gray-800">Información del cliente</h3>
            <div class="mt-4">
              <p class="text-gray-700"><span class="font-semibold">Email:</span> juan@example.com</p>
              <p class="text-gray-700"><span class="font-semibold">Telefono:</span> +1234567890</p>
              <p class="text-gray-700"><span class="font-semibold">Username:</span> JuAnMoRa</p>
              <p class="text-gray-700"><span class="font-semibold">Departamento:</span> Ventas</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
