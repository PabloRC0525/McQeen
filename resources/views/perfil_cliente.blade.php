@extends('index')
@section('contenido')
    <title>Client Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
  </head>
  <body class="flex justify-center items-center h-screen">
    <div class="w-1/2">
      <div class="flex items-center p-4 bg-gray-200 border border-gray-300 rounded-lg mt-4">
        <img src="https://via.placeholder.com/100x100" alt="Client profile picture" class="w-20 h-20 rounded-full">
        <div class="ml-4">
          <h2 class="text-xl font-medium">Juan Antonio Montoya Ramírez</h2>
          <p class="text-gray-600">Client</p>
          <div class="flex justify-end mt-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit User</button>
          </div>
        </div>
      </div>
    </div>
    @endsection