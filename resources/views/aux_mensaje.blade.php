@extends('nav_aux')
@section('contenido')
<mensajes class="flex justify-center align-middle my-5 ">

    <div class="h-96 w-3/4 bg-green-100 border-solid border-2 border-gray-700 mx-2 rounded-md flex">

        <div class="w-1/6 rounded-lg p-2 ml-4">

            <div class="bg-gray-300 border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
                Carlos O.
            </div>
            <div class="bg-gray-100 border-r-0 border-solid border-2 border-gray-500 ml-2 p-1 rounded-md w-full">
                Jose E.
            </div>
            <div class="bg-gray-300 border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
                Alberto C:
            </div>
            <div class="bg-gray-300 border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
                Juan R.
            </div>
            <div class="bg-gray-300 border-solid border-2 border-gray-500 my-2 p-1 rounded-md w-11/12">
                Abril R.
            </div>
        </div>

        <div class="w-full bg-gray-100 my-4 mr-4 rounded-lg border-solid border-2 border-gray-500">
            <div class="bg-blue-400 p-2 rounded-md">
                Jose Eduardo
            </div>

            <br><br><br><br><br><br><br><br><br><br>

            <div class="w-full h-8 px-2 rounded-md mt-3 flex">
                <textarea class="m-2 p-2 text-gray-400 w-11/12 h-10 border-black border-2 rounded-lg resize-none">Que pasa tío</textarea>

                <div class="m-2 w-1/6 h-10 bg-green-400 border-2 border-gray-600 rounded-md text-center">
                    Enviar
                </div>
            </div>
            
        </div>

        
    </div>

  </mensajes>
@endsection