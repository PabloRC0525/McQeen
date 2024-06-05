@extends('nav_adm')

@section('contenido')
<h1 class="text-2xl font-bold text-center">Añadir Departamento</h1>
<div class="flex justify-center items-center">
    <div class="h-96 w-3/4 bg-gray-200 border-solid border-2 border-gray-700 mx-2 rounded-md flex justify-between items-center">
        
  
        <div class="h-auto w-1/3 m-4 rounded-lg p-10 text-left">
            <div class="text-xl text-red-800">Nombre</div>
            <input type="text" class="text-l pb-2 text-gray-600  border-gray-400 px-11 rounded-lg focus:border-black" />
            <br><br><div class="text-xl text-red-800">Numero de empleados</div>
            <input type="text" class="text-l pb-2 text-gray-600  border-gray-400 px-11 rounded-lg focus:border-black" />
            <br><br><div class="text-xl text-red-800">Jefe de Departamento</div>
            <input type="text" class="text-l pb-2 text-gray-600  border-gray-400 px-11 rounded-lg focus:border-black" />
        </div>
        <div>
            
        </div>
        <div class=" h-80 w- 80 flex flex-col items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full mb-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            
            <button class="bg-red-400 py-2 px-3 rounded-lg hover:bg-red-800 hover:text-white"onclick="Solicitud()">
                Guardar
            </button>
            <script>
                function Solicitud(){
                  window.location.href= 'Admin_dep'
                }
              </script>
        </div>
    </div>
</div>

<!-- SweetAlert -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function Solicitud() {
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
