<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="tailwind.css" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body class="bg-white">

  <header class="bg-green-500 shadow px-6">
    
    <div class="flex h-16 items-center justify-between">
      <!-- Logo -->
      <svg class="w-6 h-6 mx-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
      </svg>
        
      <!-- Tikets de Usuario -->
      <button class="flex flex-col items-center rounded-md text-black hover:bg-green-800 hover:text-gray-100" onclick="Tickets()">
        <svg class="text-center h-10 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
        </svg> Tickets
      </button>
      <script>
        function Tickets(){
          window.location.href= 'ticket_aux'
        }
      </script>
      
      <!-- Solicitud de Usuario -->
      <button class="flex flex-col items-center rounded-md text-black hover:bg-green-800 hover:text-gray-100" onclick="Buscar()">
        <svg class="text-center h-10 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
        </svg>
        
           Buscar
      </button>
        <script>
        function Buscar(){
          window.location.href= 'aux_buscar'
        }
      </script>

            <!-- Departamentos -->
            <button class="flex flex-col items-center rounded-md text-black hover:bg-green-800 hover:text-gray-100"onclick="Reportes()">
              <svg class="text-center h-10 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
              </svg>
                
                 Reportes
            </button>
            <script>
              function Reportes() {
                  // Aquí redirige a la vista 'user'
                  window.location.href = 'reportes';
              }
          </script>

      <!-- Departamentos -->
      <button class="flex flex-col items-center rounded-md text-black hover:bg-green-800 hover:text-gray-100"onclick="Mensajes()">
        <svg class="text-center h-10 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" onclick="Mensajes()">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
        </svg>
          
           Mensajes
      </button>
      <script>
        function Mensajes() {
            // Aquí redirige a la vista 'user'
            window.location.href = 'msg_aux';
        }
    </script>

      <!-- Perfil Usuario -->
      <button class="flex flex-col items-center rounded-md text-black hover:bg-green-800 hover:text-gray-100">
        <svg class="text-center h-10 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" onclick="Perfil()">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
          </svg> Perfil
      </button>
      <script>
        function Perfil() {
            // Aquí redirige a la vista 'user'
            window.location.href = 'aux';
        }
    </script>
    </div>

  </div>

  </header>
  <main>
    @yield('contenido')
  </main>

</body>
</html>