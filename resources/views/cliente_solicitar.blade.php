@extends('index')
@section('contenido')
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md p-6 rounded">
            <h2 class="text-2xl font-bold mb-4">Descripcion</h2>
            <p class="text-gray-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </div>
        <div class="bg-white shadow-md p-6 mt-6 rounded">
            <h2 class="text-2xl font-bold mb-4">Enviar Solicitud</h2>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Enviar
            </button>
        </div>
        <div class="bg-white shadow-md p-6 mt-6 rounded">
            <h2 class="text-2xl font-bold mb-4">Titulo</h2>
            <p class="text-gray-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </div>
        <div class="bg-white shadow-md p-6 mt-6 rounded flex justify-end">
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">
                Cancelar
            </button>
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Descripcion
            </button>
        </div>
    </div>
</body>
@endsection