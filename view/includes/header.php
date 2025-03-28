<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Médicos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-green-50 to-teal-100">

    <header class="bg-green-700 text-white p-6 shadow-lg">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-4xl font-semibold bg-white bg-clip-text text-transparent">
                Sistema de Cadastro de Médicos
            </h1>

            <!-- Menu de navegação com base na sessão -->
            <?php if (isset($_SESSION['usuario'])): ?>
                <nav>
    <ul class="flex space-x-8 text-lg">
        <li>
            <a href="index.php" 
               class="text-white font-bold
                      px-5 py-3 rounded-xl 
                      bg-green-600
                      shadow-lg hover:shadow-emerald-500/40
                      transform hover:scale-105 transition-all duration-300
                      flex items-center gap-2">
               <span class="text-emerald-200">▶</span> Início
            </a>
        </li>
        <li>
            <a href="?action=listarMedicos" 
               class="text-white font-bold
                      px-5 py-3 rounded-xl 
                      bg-green-600
                      shadow-lg hover:shadow-teal-500/40
                      transform hover:scale-105 transition-all duration-300
                      flex items-center gap-2">
               <span class="text-emerald-200">🩺</span> Listar Médicos
            </a>
        </li>
        <li>
            <a href="?action=listarEspecialidades" 
               class="text-white font-bold
                      px-5 py-3 rounded-xl 
                      bg-green-600 
                      shadow-lg hover:shadow-lime-500/40
                      transform hover:scale-105 transition-all duration-300
                      flex items-center gap-2">
               <span class="text-emerald-200">📋</span> Especialidades
            </a>
        </li>
        <li>
            <a href="?action=logout" 
               class="text-white font-bold
                      px-5 py-3 rounded-xl 
                      bg-red-600
                      shadow-lg hover:shadow-rose-500/40
                      transform hover:scale-105 transition-all duration-300
                      flex items-center gap-2">
               <span class="text-rose-200">🚪</span> Sair
            </a>
        </li>
    </ul>
</nav>
<br><br>
            <?php endif; ?>
        </div>
    </header>

   
</body>

</html>
