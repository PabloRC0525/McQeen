@extends('index')
@section('contenido')
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <body class="bg-gray flex items-center justify-center h-screen">
    <div class="flex items-center justify-center min-h-screen">
    
        <div class="p-4 border-b-2">
          <div class="flex justify-between items-center">

    <div class="bg-white p-8 rounded-lg shadow-md max-w-2xl w-full flex">

        <div class="mr-4">
            <h2 class="text-xl font-medium">Mantenimiento</h2>
            <ul class="mt-4">
                <li class="text-l font-medium">
                    <a href="#" class="block p-2 rounded hover:bg-gray-300">Sistema</a>
                </li>
                <li class="text-l font-medium">
                    <a href="#" class="block p-2 rounded hover:bg-gray-300">Problemas de red</a>
                </li>
            </ul>
        </div>
        
        <div class="flex-1 p-4">
            <h3 class="text-xl font-medium">Mantenimiento</h3>
            <p class="text-gray-600 text-s">Descripción del problema</p>
            <p class="text-gray-700 text-s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
            <div class="flex justify-end mt-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Cancelar</button>
            </div>
        </div>
    </div>
</body>
@endsection