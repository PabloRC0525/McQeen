@extends('index')
@section('contenido')
<body class="bg-gray flex items-center justify-center h-screen">
  <div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-xl rounded-lg bg-white shadow-md">
      <div class="p-4 border-b-2">
        <div class="flex justify-between items-center">
          <h5 class="text-xl font-medium text-gray-800">Chats</h5>
          <button class="text-sm text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500">Edit</button>
        </div>
    
      </div>
      <div class="flex">
        <div class="w-1/4 p-4">
          <div class="text-xl font-medium text-gray-800">Contactos</div>
          <div class="flex flex-col mt-4">
            <div class="flex items-center p-2 rounded-lg hover:bg-gray-200 cursor-pointer">
              
              <div>
                <h5 class="text-lg font-medium text-gray-800">Juan Montoya</h5>
                <p class="text-sm text-gray-500">Buenos dias!</p>
              </div>
            </div>
            <div class="flex items-center p-2 rounded-lg hover:bg-gray-200 cursor-pointer">
              
              <div>
                <h5 class="text-lg font-medium text-gray-800">Pablo Ramirez</h5>
                <p class="text-sm text-gray-500">Listo!</p>
              </div>
            </div>
            <div class="flex items-center p-2 rounded-lg hover:bg-gray-200 cursor-pointer">
            </div>
            
          </div>
        </div>
        <div class="w-3/4 p-4">
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <div class="w-10 h-10 rounded-full bg-gray-300 mr-4"></div>
              <div>
                <h5 class="text-lg font-medium text-gray-800">Abril Sanchez</h5>
                <p class="text-sm text-gray-500">Hola! Tienes un momento</p>
              </div>
            </div>
            <div class="text-sm text-gray-400">10:30 AM</div>
          </div>
          
          <div class="flex items-center p-4 mt-4">
            <div class="mt-1 p-4 rounded-lg bg-gray-100">
              <input type="text" placeholder="Mensaje" class="flex-1 outline-none mr-4">
            </div>
            
            <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

@endsection