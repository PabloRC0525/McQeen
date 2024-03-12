@extends('index')
@section('contenido')
<div class="bg-white p-8 rounded-lg shadow-md flex  items-center justify-center border-b-2 w-3/4 ml-44 mb-5 mt-5">

    <div class="mr-4">
        <h2 class="text-xl font-medium">Mantenimiento</h2>
        <ul class="mt-4">
            <li class="text-l font-medium">
              <p class="text-gray-600 text-s">No. Ticket: 003</p>
            </li>
            <li>
              <p class="text-gray-700 text-s">Autor: José C.</p>
            </li>
            <li>
              <p class="text-gray-700 text-s">Departamento: Administración</p>
            </li>
            <li>
              <p class="text-gray-700 text-s">Fecha: 02/10/2022</p>
            </li>
            <li>
              <p class="text-red-700 text-s">Clasificación: Importante</p>
            </li>
            <li>
              <p class="text-gray-700 text-s">Status: Asignado</p>
            </li>
        </ul>
    </div>
    
    <div class="flex-1 p-4">
        <h3 class="text-xl font-medium">Mantenimiento</h3>

        <p class="text-gray-700 text-s">Detalle: Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor  
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendiss.
        </p>

        <div class="flex justify-end align-bottom mt-4">
            <button id="cancelar" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Cancelar</button>
        </div>
    </div>

</div>
<div class="bg-white p-8 rounded-lg shadow-md flex  items-center justify-center border-b-2 w-3/4 ml-44 mb-5 mt-5">

    <div class="mr-4">
        <h2 class="text-xl font-medium">Sistema</h2>
        <ul class="mt-4">
            <li class="text-l font-medium">
              <p class="text-gray-600 text-s">No. Ticket: 004</p>
            </li>
            <li>
              <p class="text-gray-700 text-s">Autor: José C.</p>
            </li>
            <li>
              <p class="text-gray-700 text-s">Departamento: Administración</p>
            </li>
            <li>
              <p class="text-gray-700 text-s">Fecha: 02/10/2022</p>
            </li>
            <li>
              <p class="text-red-700 text-s">Clasificación: Importante</p>
            </li>
            <li>
              <p class="text-gray-700 text-s">Status: Asignado</p>
            </li>
        </ul>
    </div>
    
    <div class="flex-1 p-4">
        <h3 class="text-xl font-medium">Sistema</h3>

        <p class="text-gray-700 text-s">Detalle: Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor  
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendiss.
        </p>

        <div class="flex justify-end align-bottom mt-4">
            <button id="cancelar" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Cancelar</button>
        </div>
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
@endsection