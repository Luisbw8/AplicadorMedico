<?php include 'includes/header.php'; ?>

<!-- Formulário de cadastro/edição de especialidade -->
<div class="max-w-xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-6 border-2 border-green-200">
<h2 class="text-3xl font-bold text-green-700 text-center mb-6 border-b-2 border-green-200 pb-3">
        <?php echo isset($especialidade) ? 'Editar Especialidade' : 'Cadastrar Especialidade'; ?>
    </h2>

    <form action="?action=<?php echo isset($especialidade) ? 'atualizarEspecialidade' : 'salvarEspecialidade'; ?>" method="post">
        <?php if (isset($especialidade)): ?>
            <input type="hidden" name="id" value="<?php echo $especialidade->id; ?>">
        <?php endif; ?>

        <div class="mb-4">
            <label for="nome" class="block text-green-800 font-medium mb-2">Nome da Especialidade:</label>
            <input type="text" name="nome" id="nome" required
                value="<?php echo isset($especialidade) ? htmlspecialchars($especialidade->nome) : ''; ?>"
                class="w-full p-3 border border-green-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
        </div>

        <!-- Botão de submit -->
        <button type="submit" class="w-full py-3 bg-green-600 text-white rounded-md font-medium hover:bg-green-700 transition duration-300">
            <?php echo isset($especialidade) ? 'Atualizar' : 'Salvar'; ?>
        </button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
