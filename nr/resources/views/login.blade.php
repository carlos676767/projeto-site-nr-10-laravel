<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - NR-10</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100 flex items-center justify-center min-h-screen font-sans">

  <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md">
    <div class="flex flex-col items-center mb-6">
      <div class="bg-blue-200 w-16 h-16 rounded-full flex items-center justify-center shadow">
        <i class="fas fa-user text-blue-600 text-2xl"></i>
      </div>
      <h2 class="text-2xl font-semibold mt-4 text-blue-700">Login NR-10</h2>
    </div>

    <form class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1" for="email">Usuario</label>
        <input type="text" id="usuario" name="email" required
               class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>
      
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1" for="password">Senha</label>
        <input type="password" id="password" name="password" required
               class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>

      <div class="flex items-center justify-between text-sm">
        <label class="flex items-center">
          <input type="checkbox" class="mr-2 text-blue-600">
          Lembrar-me
        </label>
        <a href="#" class="text-blue-500 hover:underline">Esqueci a senha</a>
      </div>

      <button id="entrar"
              class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-xl transition-all">
        Entrar
      </button>
    </form>


  </div>




  <div id="alertSucess" class="hidden fixed top-4 right-4 z-50 flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
    <div class="flex items-center justify-center w-12 bg-blue-500">
        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40">
            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
        </svg>
    </div>
    <div class="px-4 py-2 -mx-3">
        <div class="mx-3">
            <span class="font-semibold text-blue-500 dark:text-blue-400">Info</span>
            <p class="text-sm text-gray-600 dark:text-gray-200">Usuário logado com sucesso, aguarde 5 segundos!</p>
        </div>
    </div>
</div>



<div id="alertErr" class="hidden fixed top-4 right-4 z-50 flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800" >
    <div class="flex items-center justify-center w-12 bg-red-500">
        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
        </svg>
    </div>

    <div class="px-4 py-2 -mx-3">
        <div class="mx-3">
            <span class="font-semibold text-red-500 dark:text-red-400">Error</span>
            <p id="textMsg" class="text-sm text-gray-600 dark:text-gray-200">
                
            </p>
        </div>
    </div>
</div>


  <script src="{{ asset('js/loginMyUserX.js') }}"></script>
  <script src="{{ asset('js/redirectPage.js') }}"></script>
  <script src="{{ asset('js/setStorage.js') }}"></script>
</body>
</html>
