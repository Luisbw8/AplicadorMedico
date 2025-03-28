<?php
    include 'includes/header.php';
    $erro = isset($erro) ? $erro : '';
?>

<div class="flex justify-center items-center min-h-screen bg-gradient-to-r from-green-800 via-emerald-700 to-teal-600 px-4">
    <div class="bg-black bg-opacity-50 p-8 rounded-xl shadow-2xl w-full max-w-md transform transition-all duration-500 hover:shadow-emerald-500/20 hover:shadow-lg backdrop-blur-sm">
        <div class="mb-8">
            <h2 class="text-4xl text-white text-center font-bold bg-gradient-to-r from-green-400 to-teal-300 bg-clip-text text-transparent">
                Login
            </h2>
            <div class="h-1 w-24 bg-gradient-to-r from-green-500 to-teal-400 mx-auto mt-2 rounded-full"></div>
        </div>
        
        <?php if ($erro): ?>
            <div class="bg-red-900/40 border-l-4 border-red-500 p-4 mb-6 rounded-r-lg">
                <p class="text-red-300 font-medium animate-pulse"><?php echo $erro; ?></p>
            </div>
        <?php endif; ?>
        
        <form action="?action=login" method="post" class="space-y-6">
            <div class="space-y-2">
                <label for="usuario" class="block text-black text-lg font-medium">Usuário</label>
                <div class="relative">
                    <input type="text" name="usuario" id="usuario" 
                        class="w-full p-4 pl-12 bg-gray-800/80 text-black rounded-lg border-2 border-gray-700 
                        focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent 
                        transition duration-300 ease-in-out" required>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-500 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
            </div>
            
            <div class="space-y-2">
                <label for="senha" class="block text-black text-lg font-medium">Senha</label>
                <div class="relative">
                    <input type="password" name="senha" id="senha" 
                        class="w-full p-4 pl-12 bg-gray-800/80 text-black rounded-lg border-2 border-gray-700 
                        focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent 
                        transition duration-300 ease-in-out" required>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-500 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
            </div>
            
            <div class="pt-2">
                <button type="submit" 
                    class="w-full py-4 bg-green-600 
                    text-white rounded-lg font-bold text-lg transform transition-all duration-500 
                    hover:scale-[1.02] hover:shadow-lg hover:shadow-emerald-500/30 
                    focus:ring-4 focus:ring-emerald-500/50 active:scale-[0.98]">
                    Entrar
                </button>
            </div>
            
           
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>