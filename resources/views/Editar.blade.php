@extends('index')

@section('contenido')
<div class="flex items-center justify-center min-h-screen">
  <div class="max-w-3xl bg-gray-100 p-8 rounded-lg shadow-md">
    <div class="p-5 border-b-2">
      <div class="flex justify-between items-center">
        <div class="w-5/12">
          <div class="flex items-center p-4 bg-white border rounded-lg mt-1">
            <img src="https://via.placeholder.com/150" alt="Client profile picture" class="w-24 h-24 rounded-full">
            <div class="ml-6">
              <h2 class="text-2xl font-bold text-gray-800">Juan Antonio Montoya Ramírez</h2>
              <p class="text-gray-600">Client</p>
              <div class="flex justify-end mt-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit User</button>
              </div>
            </div>
          </div>
        </div>
        <div class="w-7/12 ml-8">
          <div class="mt-4">
            <h3 class="text-xl font-semibold text-gray-800">Editar Información del cliente</h3>
            <div class="mt-4">
              <form action="#" method="POST">
                <div class="mb-4">
                  <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                  <input type="email" name="email" id="email" autocomplete="email" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                  <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
                  <input type="tel" name="phone" id="phone" autocomplete="tel" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                  <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                  <input type="text" name="username" id="username" autocomplete="username" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                  <label for="department" class="block text-sm font-medium text-gray-700">Departamento</label>
                  <input type="text" name="department" id="department" autocomplete="department" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="flex">
                  <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 m-3" onclick="Perfil()">Cancelar</button>
                  <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 m-3" onclick="Perfil()">Guardar Cambios</button>
                  <script>
                    function Perfil() {
                        // Aquí redirige a la vista 'user'
                        window.location.href = 'user';
                    }
                </script>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
