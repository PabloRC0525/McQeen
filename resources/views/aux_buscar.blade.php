@extends('nav_aux')
@section('contenido')
<buscar class="flex justify-center align-middle my-5 ">

    <div class="h-96 w-3/4 bg-green-100 border-solid border-2 border-gray-700 mx-2 rounded-md flex">

        <div class="w-full bg-gray-100 my-4 mr-4 rounded-lg border-solid border-2 border-gray-500 flex-col">
            <div class="bg-green-500 p-2 rounded-md items-center">
               <p class="mx-96"> Busqueda de ticket</p> 
            </div>


            <div class="w-full h-8 px-2 rounded-md mt-3 flex">
                <textarea class="m-2 p-2 text-gray-500 w-2/3 h-10 border-black border-2 rounded-lg resize-none">Ingresa el numero de tiket</textarea>

                <div class="m-2 w-1/6 h-10 bg-green-500 border-2 border-gray-600 rounded-md text-center">
                    Buscar
                </div>

                <select class="m-2 w-1/6 h-10 bg-green-500 border-2 border-gray-600 rounded-md text-center" name="Filtrar">
                  <option value="Estatus">Estatus</option>
                  <option value="Fecha" selected>Fecha</option>
                  <option value="Departamento">Departamento</option>
                </select>

            </div>

            <div class="overflow-x-auto">
              <table class="table-auto border-collapse w-full mx-4 mt-8">
                  <thead>
                      <tr class="bg-green-300 text-green-600 uppercase text-sm leading-normal">
                          <th class="py-3 px-6 text-left">Nombre</th>
                          <th class="py-3 px-6 text-left">Fecha</th>
                          <th class="py-3 px-6 text-left">Problema</th>
                          <th class="py-3 px-6 text-left">Estatus</th>
                      </tr>
                  </thead>
                  <tbody class="text-green-600 text-sm font-light">
                      <tr class="border-b border-green-200 hover:bg-green-100">
                          <td class="py-3 px-6 text-left whitespace-nowrap">Juan Pérez</td>
                          <td class="py-3 px-6 text-left whitespace-nowrap">02/02/2021</td>
                          <td class="py-3 px-6 text-left whitespace-nowrap">Limpieza</td>
                          <td class="py-3 px-6 text-left whitespace-nowrap">Asignado</td>
                      </tr>
                      <tr class="border-b border-green-200 hover:bg-green-100">
                          <td class="py-3 px-6 text-left whitespace-nowrap">María Gómez</td>
                          <td class="py-3 px-6 text-left whitespace-nowrap">12/07/2013</td>
                          <td class="py-3 px-6 text-left whitespace-nowrap">Almacenamienro</td>
                          <td class="py-3 px-6 text-left whitespace-nowrap">Proceso</td>
                      </tr>
                      <tr class="border-b border-green-200 hover:bg-green-100">
                          <td class="py-3 px-6 text-left whitespace-nowrap">Ahmed Ali</td>
                          <td class="py-3 px-6 text-left whitespace-nowrap">24/08/2021</td>
                          <td class="py-3 px-6 text-left whitespace-nowrap">Bug</td>
                          <td class="py-3 px-6 text-left whitespace-nowrap">Terminado</td>
                      </tr>
                  </tbody>
              </table>
          </div>          
            
        </div>

        
    </div>

  </buscar>
  @endsection