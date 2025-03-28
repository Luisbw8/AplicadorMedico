<?php 
    include 'includes/header.php'; 
    // Lógica de erro (se existir)
    $erro = isset($erro) ? $erro : '';
?>

<div class="flex justify-center items-center min-h-screen bg-gradient-to-r from-green-800 via-emerald-700 to-teal-600">
    <div class="bg-black bg-opacity-50 p-8 rounded-xl shadow-2xl w-full max-w-md transform transition-all duration-500 ">
        <h2 class="text-3xl text-white text-center mb-6 font-bold bg-gradient-to-r from-green-400 to-teal-300 bg-clip-text text-transparent">
            Login
        </h2>

        <?php if ($erro): ?>
            <p class="text-red-400 text-lg font-semibold mb-4 animate-pulse"><?php echo $erro; ?></p>
        <?php endif; ?>

        <form action="?action=login" method="post">
    <div class="mb-4">
        <label for="usuario" class="block text-white text-lg font-medium mb-2">Usuário:</label>
        <input type="text" name="usuario" id="usuario" class="w-full p-4 bg-gray-800 text-white rounded-lg border-2 border-transparent focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition duration-300 ease-in-out transform" required>
    </div>

    <div class="mb-6">
        <label for="senha" class="block text-white text-lg font-medium mb-2">Senha:</label>
        <input type="password" name="senha" id="senha" class="w-full p-4 bg-gray-800 text-white rounded-lg border-2 border-transparent focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition duration-300 ease-in-out transform " required>
    </div>

    <button type="submit" class="w-full py-3 bg-gradient-to-r from-green-600 via-emerald-600 to-teal-600 text-white rounded-lg font-bold text-lg transform transition-all duration-500 hover:scale-105 hover:bg-gradient-to-l from-teal-600 via-emerald-600 to-green-600">
        Entrar
    </button>
</form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
