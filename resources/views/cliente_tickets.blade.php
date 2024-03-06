<!DOCTYPE html>
<html>
  <head>
    <title>Client Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')  
  </head>
  <body class="flex justify-center items-center h-screen">
    <div class="w-1/2">
      <div class="flex items-center p-4 bg-gray-200 border border-gray-300 rounded-lg mt-4">
        <div class="ml-4">
          <h2 class="text-xl font-medium">Mantenimiento</h2>
          <h3 class="text-l font-medium">Descripción</h3>
          <p class="text-gray-600 text-s">Descripción del problema</p>
          <div class="flex justify-end mt-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>