<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
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
</html>