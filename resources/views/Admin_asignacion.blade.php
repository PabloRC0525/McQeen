@extends('nav_adm')

@section('contenido')
<h1 class="text-2xl font-bold text-center">Asignación de Tickets</h1>
<div class="flex justify-center items-center">
<div class=" justify-center align-middle my-5 h-96 w-3/4 mx-2 rounded-md flex bg-gray-200 border-solid border-2 border-gray-700 ">

    
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border border-gray-300 p-2">Nombre</th>
                <th class="border border-gray-300 p-2">Tickets Actuales</th>
                <th class="border border-gray-300 p-2">Disponibilidad</th>
                <th class="border border-gray-300 p-2">Asignar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $users = [
                ['name' => 'Juan M.', 'tickets' => 2, 'availability' => 'Libre'],
                ['name' => 'Pablo R.', 'tickets' => 1, 'availability' => 'Libre'],
                ['name' => 'Abril S.', 'tickets' => 4, 'availability' => 'No disponible'],
            ];

            foreach ($users as $user) {
                echo "<tr>";
                echo "<td class='border border-gray-300 p-2'>" . $user['name'] . "</td>";
                echo "<td class='border border-gray-300 p-2'>" . $user['tickets'] . "</td>";
                echo "<td class='border border-gray-300 p-2'>" . $user['availability'] . "</td>";
                echo "<td class='border border-gray-300 p-2'><button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'>Asignar</button></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</div>
@endsection