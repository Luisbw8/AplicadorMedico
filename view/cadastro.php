<?php
include 'includes/header.php';

$medico = $medico ?? null;
$medicoId = $medicoId ?? null;

if (isset($medicoId) && $medicoId != null) {
    if ($medico == null) {
        header("Location: ?action=listarMedicos");
        exit;
    }
}
?>

<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto bg-white shadow-xl rounded-xl overflow-hidden border border-green-200">
        <!-- Header -->
        <div class="bg-gradient-to-r from-green-600 to-green-700 px-6 py-4">
            <h2 class="text-2xl font-bold text-white">
                <?php echo $medico ? "Editar Médico" : "Cadastrar Novo Médico"; ?>
            </h2>
            <p class="text-green-100 text-sm mt-1">
                <?php echo $medico ? "Atualize as informações do médico" : "Preencha os dados para cadastrar um novo médico"; ?>
            </p>
        </div>

        <!-- Form -->
        <form action="?action=<?php echo $medico ? "atualizarMedico" : "salvarMedico"; ?>" method="post" class="p-6 space-y-6">
            <?php if ($medico): ?>
                <input type="hidden" name="id" value="<?php echo $medico->id; ?>">
            <?php endif; ?>

            <!-- Nome -->
            <div class="space-y-2">
                <label for="nome" class="block text-green-800 font-medium">Nome Completo:</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <input type="text" name="nome" id="nome" required 
                        value="<?php echo $medico ? htmlspecialchars($medico->nome) : ''; ?>"
                        class="w-full pl-10 p-3 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200"
                        placeholder="Digite o nome completo do médico">
                </div>
            </div>

            <!-- CRM -->
            <div class="space-y-2">
                <label for="crm" class="block text-green-800 font-medium">CRM:</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                        </svg>
                    </div>
                    <input type="text" name="crm" id="crm" required 
                        value="<?php echo $medico ? htmlspecialchars($medico->crm) : ''; ?>"
                        class="w-full pl-10 p-3 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200"
                        placeholder="Digite o número do CRM">
                </div>
            </div>

            <!-- Especialidades -->
            <div class="space-y-3">
                <label class="block text-green-800 font-medium">Especialidades:</label>
                <div class="bg-green-50 p-4 rounded-lg border border-green-200 max-h-60 overflow-y-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <?php foreach ($especialidades as $especialidade): ?>
                            <div class="flex items-center space-x-3 p-2 hover:bg-green-100 rounded-md transition-colors">
                                <input type="checkbox" name="especialidades[]"
                                    value="<?php echo $especialidade->id; ?>"
                                    id="especialidade_<?php echo $especialidade->id; ?>"
                                    <?php
                                    if ($medico) {
                                        foreach ($medico->especialidades as $medEsp) {
                                            if ($medEsp->id == $especialidade->id) {
                                                echo 'checked';
                                                break;
                                            }
                                        }
                                    }
                                    ?>
                                    class="h-5 w-5 text-green-600 border-green-300 rounded focus:ring-green-500">
                                <label for="especialidade_<?php echo $especialidade->id; ?>" 
                                       class="text-green-800 cursor-pointer select-none">
                                    <?php echo htmlspecialchars($especialidade->nome); ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <p class="text-sm text-green-600 italic">Selecione todas as especialidades aplicáveis</p>
            </div>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row gap-3 pt-4">
                <a href="?action=listarMedicos" 
                   class="py-3 px-4 bg-gray-200 text-gray-700 rounded-lg font-medium text-center hover:bg-gray-300 transition duration-200 shadow-sm">
                    Cancelar
                </a>
                <button type="submit" 
                        class="flex-1 py-3 px-4 bg-gradient-to-r from-green-600 to-green-700 text-white rounded-lg font-bold hover:from-green-700 hover:to-green-800 transition duration-200 shadow-md">
                    <?php echo $medico ? "Atualizar Médico" : "Cadastrar Médico"; ?>
                </button>
            </div>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>