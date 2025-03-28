<?php
include 'includes/header.php';
// require_once 'model/EspecialidadeModel.php'; // Certifique-se de incluir o modelo

//$especialidadeModel = new EspecialidadeModel();
//$especialidades = $especialidadeModel->getAllEspecialidades();
?>

<div class="max-w-7xl mx-auto p-6 bg-white shadow-lg rounded-lg border-2 border-green-200">
    <h2 class="text-4xl font-bold mb-6 pb-3 border-b-2 border-green-300 text-green-700">
        Lista de Especialidades
    </h2>
    </h2>
    <a href="?action=cadastrarEspecialidade" 
   class="inline-block bg-gradient-to-r from-green-600 to-green-700 text-white py-3 px-6 rounded-lg font-bold shadow-md hover:shadow-lg transition-all hover:bg-gradient-to-r hover:from-green-700 hover:to-green-800">
   Cadastrar Nova Especialidade
</a>
    <?php if (isset($mensagem)): ?>
        <p class="text-green-600 mb-4"><?php echo $mensagem; ?></p>
    <?php endif; ?>

    <table class="min-w-full table-auto border-collapse bg-gray-100 rounded-lg shadow-md overflow-hidden">
    <thead>
    <tr class="bg-gradient-to-r from-green-600 to-green-700 text-white shadow-sm">
        <th class="px-6 py-4 text-left text-sm font-medium">ID</th>
        <th class="px-6 py-4 text-left text-sm font-medium">Nome</th>
        <th class="px-6 py-4 text-left text-sm font-medium">Ações</th>
    </tr>
</thead>
        <tbody>
            <?php if (!empty($especialidades)): ?>
                <?php foreach ($especialidades as $especialidade): ?>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-700"><?php echo $especialidade->id; ?></td>
                        <td class="px-6 py-4 text-sm text-gray-700"><?php echo htmlspecialchars($especialidade->nome); ?></td>
                        <td class="px-6 py-4 text-sm">
                            <a href="?action=editarEspecialidade&id=<?php echo $especialidade->id; ?>" class="text-green-600 hover:text-green-800">Editar</a> |
                            <a href="?action=excluirEspecialidade&id=<?php echo $especialidade->id; ?>" class="text-red-600 hover:text-red-800" onclick="return confirm('Tem certeza?');">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="px-6 py-4 text-center text-gray-600">Nenhuma especialidade cadastrada.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php'; ?>
