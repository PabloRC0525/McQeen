@extends('index')
@section('contenido')
<solicitud class="flex justify-center align-middle my-5">

    <div class="h-96 w-3/4 bg-gray-200 border-solid border-2 border-gray-700 mx-2 rounded-md flex">

      <div class="w-1/6 rounded-lg p-2 ml-4">

        <div class="bg-green-300 border-solid border-2 border-gray-500 mt-2 ml-5 p-1 rounded-md w-11/12">
            + Nuevo
        </div>
        <div class="bg-gray-300 border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
            Limpieza              
        </div>
        <div class="bg-gray-300 border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
            Bug
        </div>
        <div class="bg-gray-300 border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
          Mantenim.
      </div>

    </div>

        <div class="w-full bg-gray-100 my-4 mr-4 rounded-lg border-solid border-2 border-gray-500 flex-row">
            <div class="bg-blue-400 p-2 rounded-md">
                Nuevo Ticket
            </div>

            <textarea class="m-2 p-2 text-2xl text-gray-400 w-11/12 h-12 border-black border-2 rounded-lg resize-none">Título</textarea>

            <textarea class="m-2 p-2 text-gray-400 w-11/12 h-36 border-black border-2 rounded-lg resize-none">Descripción</textarea>
            
            <button id="guardar" class="ml-3 bg-green-600 hover:bg-green-700 p-2 rounded-xl">
              Solicitar
            </button>

        </div>
        
    </div>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.getElementById('guardar').addEventListener('click', function() {
            Swal.fire({
                icon: 'success',
                title: 'Listo',
                text: 'El ticket se generó correctamente',
            });
        });
    </script>
  </solicitud>
@endsection