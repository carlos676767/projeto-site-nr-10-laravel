<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard NR-10</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
  </head>

  <style>
    a{
      color: red;
    }
  </style>


  <nav x-data="{ isOpen: false }" class="bg-[#DBEAFE] shadow">
    <div class="container px-6 py-4 mx-auto">
        <div class="lg:flex lg:items-center">
            <div class="flex items-center justify-between">
                <a href="#">
                    <img class="w-auto h-6 sm:h-7" src="https://merakiui.com/images/full-logo.svg" alt="">
                </a>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-#DBEAFE hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>
                
                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
             class="absolute inset-x-0 z-20 flex-1 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-[#DBEAFE] dark:bg-bg-[#DBEAFE] lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center lg:justify-between">
                <div class="flex flex-col text-gray-600 capitalize dark:bg-bg-[#0EA5E9]lg:flex lg:px-16 lg:-mx-4 lg:flex-row lg:items-center">
                    <a href="#" class="mt-2 transition-colors duration-300 transform lg:mt-0 lg:mx-4 hover:text-gray-900 dark:bg-bg-[#0EA5E9]">features</a>
                    <a href="#" class="mt-2 transition-colors duration-300 transform lg:mt-0 lg:mx-4 hover:text-gray-900 dark:bg-bg-[#0EA5E9]">downloads</a>
                    <a href="#" class="mt-2 transition-colors duration-300 transform lg:mt-0 lg:mx-4 hover:text-gray-900 dark:bg-bg-[#0EA5E9]">docs</a>
                    <a href="#" class="mt-2 transition-colors duration-300 transform lg:mt-0 lg:mx-4 hover:text-gray-900 dark:bg-bg-[#0EA5E9]">support</a>
                    <a href="#" class="mt-2 transition-colors duration-300 transform lg:mt-0 lg:mx-4 hover:text-gray-900 dark:bg-bg-[#0EA5E9]">blog</a>
    
                    <div class="relative mt-4 lg:mt-0 lg:mx-4">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-4 h-4 text-gray-600 dark:text-gray-300" viewBox="0 0 24 24" fill="none">
                                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
    
                        <input 
  type="text" 
  class="w-full py-1 pl-10 pr-4 text-gray-900 placeholder-gray-700 bg-[#DBEAFE] border-b border-[#DBEAFE] focus:outline-none focus:border-gray-600 dark:bg-[#DBEAFE] dark:text-gray-800 dark:placeholder-gray-600 lg:w-56" 
  placeholder="Search">

                    </div>
                </div>
    
                <div class="flex justify-center mt-6 lg:flex lg:mt-0 lg:-mx-2">
                    <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 transform dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.372L11.229 16.179C11.3307 16.3142 11.512 16.3863 11.706 16.388C11.9147 16.3884 12.1007 16.3067 12.18 16.151C12.235 16.0335 12.2344 15.8859 12.18 15.75L12.18 16.524Z"
                                fill="#FFFFFF"
                            ></path>
                        </svg>
                    </a>
                    <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 transform dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="GitHub">
                        <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M12 2C6.475 2 2 6.475 2 12C2 17.525 6.475 22 12 22C17.525 22 22 17.525 22 12C22 6.475 17.525 2 12 2ZM12 3C12.3333 3 12.6667 3.33333 12.6667 3.66667C12.6667 4 12.3333 4.33333 12 4.33333C11.6667 4.33333 11.3333 4 11.3333 3.66667C11.3333 3.33333 11.6667 3 12 3ZM12 5.33333C8.66667 5.33333 6 7.66667 6 10C6 10.5 6.5 10.5 6.5 10.5C7.5 10.5 8 11.5 8 11.5C8 11.5 7.5 12 7.5 12.5C7.5 13.5 8.5 13.5 8.5 13.5C8.5 13.5 9 14 9 14.5C9 15.5 8.5 15.5 8.5 15.5C9 16.5 9.5 17.5 10 18C11 18 11.5 18.5 12.5 18.5C13.5 18.5 14 19 14.5 19C14.5 18 14 17 14 16C14 15 13 15 13 14.5C13 14 13.5 13.5 13.5 13.5C13.5 12 13 11.5 13 11.5C13.5 11 13.5 10 13.5 9.5C13.5 9.5 13 9 13 8.5C12.5 8.5 12 8.5 12 8.5C11.5 8.5 11 8 11 7.5C11 7 11.5 7 12 6.5C12.5 6.5 12.5 6.5 12 5.33333Z"
                                fill="#FFFFFF"
                            ></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

  <body class="bg-blue-100 font-sans">
    <div class="flex flex-col md:flex-row h-screen">
      <!-- Sidebar -->
      <aside class="w-full md:w-16 bg-blue-#DBEAFE flex flex-col items-center py-4 rounded-b-2xl md:rounded-r-2xl shadow-lg md:h-auto">
        <div class="mb-6">
          <div class="w-8 h-8 bg-white rounded-full"></div>
        </div>
        <nav class="flex flex-row md:flex-col space-x-4 md:space-y-6">
          <i class="fas fa-home w-6 h-6 bg-blue-300 rounded"></i>
          <i class="fas fa-cogs w-6 h-6 bg-blue-300 rounded"></i>
          <i class="fas fa-user w-6 h-6 bg-blue-300 rounded"></i>
          <i class="fas fa-bell w-6 h-6 bg-blue-300 rounded"></i>
          <i class="fas fa-sign-out-alt w-6 h-6 bg-blue-300 rounded"></i>
        </nav>
      </aside>
      <!-- Main content -->
      <main class="flex-1 p-8">
        <h1 class="text-2xl font-semibold mb-6">Bem-vindo, Carlos</h1>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Colaboradores com NR-10 -->
          <div class="bg-white rounded-xl shadow p-4">
            <h2 class="text-sm font-medium mb-2">Colaboradores com NR-10 em dia</h2>
            <div class="w-24 h-24 mx-auto relative">
              <svg class="w-full h-full" viewBox="0 0 36 36">
                <path fill="none" stroke="#e5e7eb" stroke-width="4" d="M18 2.0845
                  a 15.9155 15.9155 0 0 1 0 31.831
                  a 15.9155 15.9155 0 0 1 0 -31.831" />
                <path fill="none" stroke="#0ea5e9" stroke-width="4" stroke-dasharray="75, 100" d="M18 2.0845
                  a 15.9155 15.9155 0 0 1 0 31.831
                  a 15.9155 15.9155 0 0 1 0 -31.831" />
              </svg>
              <div class="absolute inset-0 flex items-center justify-center">
                <span class="text-xl font-semibold">75%</span>
              </div>
            </div>
          </div>

          <!-- Treinamentos vencidos -->
          <div class="bg-white rounded-xl shadow p-4 flex items-center gap-4">
            <div class="text-red-500 text-2xl"><i class="fas fa-exclamation-triangle"></i></div>
            <div>
              <p class="text-sm text-gray-600">Treinamentos vencidos</p>
              <p class="text-xl font-bold">2</p>
            </div>
          </div>

          <!-- Próximos da expiração -->
          <div class="bg-white rounded-xl shadow p-4 flex items-center gap-4">
            <div class="text-yellow-500 text-2xl"><i class="fas fa-exclamation-circle"></i></div>
            <div>
              <p class="text-sm text-gray-600">Próximos da expiração</p>
              <p class="text-xl font-bold">3</p>
            </div>
          </div>
        </div>

        <!-- Gráfico de Intervenções elétricas -->
        <div class="bg-white rounded-xl shadow p-4 mt-6">
          <h2 class="text-sm font-medium mb-4">Intervenções elétricas registradas</h2>
          <div class="flex items-end space-x-4 h-32">
            <div class="w-6 bg-blue-300 h-1/5 rounded"></div>
            <div class="w-6 bg-blue-400 h-2/5 rounded"></div>
            <div class="w-6 bg-blue-400 h-1/2 rounded"></div>
            <div class="w-6 bg-blue-500 h-3/5 rounded"></div>
            <div class="w-6 bg-blue-500 h-4/5 rounded"></div>
            <div class="w-6 bg-blue-600 h-full rounded"></div>
          </div>
        </div>
      </main>
    </div>
  </body>


  <script>
    
    (async () => {
  const dados = {
    usuario: "carlos",
    senha: "senhaSegura123A@",
    role: "tecnico"
  };

  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  console.log(csrfToken);
  
  try {
    const resposta = await fetch('http://localhost:8000/insertColaborador', {
      method: 'POST', 
      headers: {
        'Content-Type': 'application/json', 
        'X-CSRF-TOKEN': csrfToken 
      },
      body: JSON.stringify(dados) 
    });

    const resultado = await resposta.json();
    console.log( resultado);
  } catch (erro) {
    console.error('Erro na requisição:', erro);
  }


})();





  </script>
</html>



