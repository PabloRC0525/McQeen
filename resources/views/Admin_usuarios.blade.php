@extends('nav_adm')

@section('contenido')
<h1 class="text-2xl font-bold text-center">Usuarios</h1>
<div class="flex justify-center items-center">
    <div class=" justify-center align-middle my-5 h-96 w-3/4 mx-2 rounded-md flex bg-gray-200 border-solid border-2 border-gray-700 ">

        <div class="w-1/6 rounded-lg p-2 ml-4">

            <div class="bg-gray-300 hover:bg-red-800 hover:text-white  border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
                Pablo Ramírez
            </div>
            <div class="bg-red-400 text-blackborder-r-0 border-solid border-2 border-gray-500 ml-2 p-1 rounded-md w-full">
                Abril Sánchez
            </div>
            <div class="bg-gray-300  hover:bg-red-800 hover:text-white border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
                Juan Montoya
            </div>
            <div class="bg-gray-300 hover:bg-red-800 hover:text-white border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
                José Alvarado
            </div>
            <div class="bg-gray-300 hover:bg-red-800 hover:text-white border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
                Laura Silva
            </div>
            <button onclick="Añadir()" class="bg-green-300 hover:bg-green-800 hover:text-white border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
                + Añadir
            </button>
            <script>
                function Añadir() {
                    // Aquí redirige a la vista 'user'
                    window.location.href = 'nuevo_usr';
                }
            </script>
        </div>

        <div class="w-full flex justify-between items-center bg-gray-100 my-4 mr-4 rounded-lg border-solid border-2 border-gray-500">
            <div class="flex-shrink-0 rounded-lg p-10">
                <div class="text-xl text-red-800 text-left">Nombre</div>
                <div class="text-l pb-6 text-gray-600 text-left">Abril Ileana Sánchez Hernández</div>
                <div class="text-xl  text-red-800 text-left">Departamento</div>
                <div class="text-l pb-6 text-gray-600 text-left">Contaduría</div>
                <div class="text-xl  text-red-800 text-left">Nº de quejas</div>
                <div class="text-l pb-6 text-gray-600 text-left">10</div>
                <div class="text-xl text-red-800 text-left">Quejas activas</div>
                <div class="text-l text-gray-600 text-left">Si</div>
            </div>
            <div class=" h-80 w- 80 flex flex-col items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full mb-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <button class="bg-yellow-300 py-2 px-3 rounded-lg hover:bg-yellow-500 hover:text-white mb-2 "onclick="Edit()">
                    Editar Usuario
                </button>
                <button onclick="Eliminar()" class="bg-red-400 py-2 px-3 rounded-lg hover:bg-red-800 hover:text-white">
                    Eliminar Usuario
                </button>
                <script>
                    function Edit() {
                        // Aquí redirige a la vista 'user'
                        window.location.href = 'Editar_admn';
                    }
                </script>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function Eliminar() {
        // Simula la solicitud de guardar (aquí puedes agregar lógica de guardado)
        // Muestra SweetAlert cuando se completa la acción
        Swal.fire({
            icon: 'success',
            title: 'Usuario Eliminado',
            text: 'El usuario se ha eliminado correctamente.',
            confirmButtonText: 'Ok'
        }).then((result) => {
            // Redirige a la página Admin_Usuarios después de hacer clic en OK
            if (result.isConfirmed) {
                window.location.href = 'Admin_Usuarios';
            }
        });
    }
</script>
@endsection
