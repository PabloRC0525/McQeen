@extends('nav_aux')

@section('contenido')
<reportes class="flex justify-center align-middle my-5 ">

    <div class="h-96 w-3/4 bg-green-100 border-solid border-2 border-gray-700 mx-2 rounded-md flex">

        <div class="w-full bg-gray-100 my-4 mr-4 rounded-lg border-solid border-2 border-gray-500 flex-col">
            <div class="bg-green-500 p-2 rounded-md items-center">
               <p class="mx-96"> Reportes</p> 
            </div>


            <div class="w-full h-8 px-2 rounded-md mt-3 flex">
                <textarea class="m-2 p-2 text-gray-500 w-2/3 h-10 border-black border-2 rounded-lg resize-none">Ingresa el numero de ticket</textarea>



                <select class="m-2 w-1/6 h-10 bg-green-500 border-2 border-gray-600 rounded-md text-center" name="Filtrar">
                  <option value="Estatus">Estatus</option>
                  <option value="Fecha" selected>Fecha</option>
                  <option value="Departamento">Departamento</option>
                </select>
                
                <button class="m-2 w-1/6 h-10 bg-green-500 border-2 border-gray-600 rounded-md text-center ">
                  Consultar
                </button>
            
        </div>
        <table class="table-auto border-collapse w-full mx-4 mt-8">
          <thead>
              <tr class="bg-green-300 text-green-600 uppercase text-sm leading-normal">
                  <th class="py-3 px-6 text-left">Departamento</th>
                  <th class="py-3 px-6 text-left">Fecha de Ultimo</th>
                  <th class="py-3 px-6 text-left">Ultimo Mes</th>
                  <th class="py-3 px-6 text-left">Total</th>
              </tr>
          </thead>
          <tbody class="text-green-600 text-sm font-light">
              <tr class="border-b border-green-200 hover:bg-green-100">
                  <td class="py-3 px-6 text-left whitespace-nowrap">Administración</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap">04/10/2023</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap">5</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap">34</td>
              </tr>
              <tr class="border-b border-green-200 hover:bg-green-100">
                  <td class="py-3 px-6 text-left whitespace-nowrap">Mercadotecnia</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap">12/07/2023</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap">7</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap">53</td>
              </tr>
              <tr class="border-b border-green-200 hover:bg-green-100">
                  <td class="py-3 px-6 text-left whitespace-nowrap">Finanzas</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap">23/06/2024</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap">10</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap">23</td>
              </tr>
          </tbody>
      </table>
    </div>

    </div>

  </reportes>
  @endsection