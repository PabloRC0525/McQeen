@extends('index')
@section('contenido')
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <div class="bg-gray-100 shadow-md p-6 rounded">
            <h2 class="text-2xl font-bold m-4">Titulo</h2>
            <input type="text" name="Descripcion" id="desc" autocomplete="desc" required class="mt-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-7">
            <h2 class="text-2xl font-bold mb-4">Descripcion</h2>
            <input type="text" name="Descripcion" id="desc" autocomplete="desc" required class="mt-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-20">
            <h2 class="text-2xl font-bold m-4">Enviar Solicitud</h2>
            <button id="guardar"class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-4">
                Enviar
            </button>
            <button id="cancelar"class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded m 4">
                Cancelar
            </button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.getElementById('cancelar').addEventListener('click', function() {
            Swal.fire({
                icon: 'error',
                title: 'Listo',
                text: 'El ticket se canceló correctamente',
            });
        });
    </script>
    <script>
        document.getElementById('guardar').addEventListener('click', function() {
            Swal.fire({
                icon: 'success',
                title: 'Listo',
                text: 'El ticket se generó correctamente',
            });
        });
    </script>
</body>

@endsection