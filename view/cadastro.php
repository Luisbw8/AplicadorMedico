<?php
include 'includes/header.php';

//Verifica se é edição
$medico = $medico ?? null;
$medicoId = $medicoId ?? null;
if (isset($medicoId) && $medicoId != null) {
    if ($medico == null) {
        header("Location: ?action=listarMedicos"); //Redireciona se id inválido
        exit;
    }
}
?>

<div class="max-w-2xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-6">
    <h2 class="text-3xl font-semibold text-gray-700 text-center mb-6"><?php echo $medico ? "Editar Médico" : "Cadastrar Médico"; ?></h2>

    <form action="?action=<?php echo $medico ? "atualizarMedico" : "salvarMedico"; ?>" method="post">
        <?php if ($medico): ?>
            <input type="hidden" name="id" value="<?php echo $medico->id; ?>">
        <?php endif; ?>

        <div class="mb-4">
            <label for="nome" class="block text-gray-700 font-medium mb-2">Nome:</label>
            <input type="text" name="nome" id="nome" required value="<?php echo $medico ? htmlspecialchars($medico->nome) : ''; ?>"
                class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>

        <div class="mb-4">
            <label for="crm" class="block text-gray-700 font-medium mb-2">CRM:</label>
            <input type="text" name="crm" id="crm" required value="<?php echo $medico ? htmlspecialchars($medico->crm) : ''; ?>"
                class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 font-medium mb-2">Especialidades:</label>
            <div class="space-y-2">
                <?php foreach ($especialidades as $especialidade): ?>
                    <div class="flex items-center">
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
                            class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="especialidade_<?php echo $especialidade->id; ?>" class="ml-2 text-gray-700"><?php echo htmlspecialchars($especialidade->nome); ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-md font-medium hover:bg-blue-700 transition duration-300">
            <?php echo $medico ? "Atualizar" : "Salvar"; ?>
        </button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
