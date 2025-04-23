<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>404 Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-[#DBEAFE] min-h-screen flex items-center justify-center">

  <main class="text-center px-6 py-24 sm:py-32 lg:px-8">
    <div>
      <p class="text-base font-semibold text-indigo-600">Erro 404</p>
      <h1 class="mt-4 text-5xl font-bold tracking-tight text-gray-900 sm:text-7xl">Página não encontrada</h1>
      <p class="mt-6 text-lg text-gray-600">Desculpe, não conseguimos encontrar a página que você procura.</p>
      <div class="mt-10 flex justify-center gap-x-6">
        <a href="/" class="rounded-md bg-[#0EA5E9] px-4 py-2.5 text-sm font-semibold text-white shadow-sm ">
          <i class="fas fa-home mr-2"></i> Voltar para a Home
        </a>
        <a href="/contato" class="text-sm font-semibold text-gray-900 hover:underline">
          Suporte <span aria-hidden="true">&rarr;</span>
        </a>
      </div>
    </div>
  </main>

</body>
</html>
