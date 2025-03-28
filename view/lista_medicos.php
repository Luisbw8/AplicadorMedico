<?php include 'includes/header.php'; ?>

<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Listagem de Médicos</h1>
        
        <a href="?action=cadastrarMedico" class="inline-flex items-center gap-2 bg-green-700 text-white py-3 px-6 rounded-lg font-medium text-sm shadow-md hover:shadow-lg transition-all duration-200 hover:bg-gradient-to-r hover:from-emerald-600 hover:to-green-700 transform hover:-translate-y-0.5 focus:ring-2 focus:ring-emerald-400 focus:ring-opacity-50 focus:outline-none">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
            </svg>
            Cadastrar Novo Médico
        </a>
    </div>

    <div class="overflow-x-auto bg-white rounded-xl shadow-lg">
        <table class="min-w-full table-auto border-collapse rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-green-700 text-white">
                    <th class="px-6 py-4 text-left text-sm font-semibold border-r border-emerald-600/30">ID</th>
                    <th class="px-6 py-4 text-left text-sm font-semibold border-r border-emerald-600/30">Nome</th>
                    <th class="px-6 py-4 text-left text-sm font-semibold border-r border-emerald-600/30">CRM</th>
                    <th class="px-6 py-4 text-left text-sm font-semibold border-r border-emerald-600/30">Especialidades</th>
                    <th class="px-6 py-4 text-left text-sm font-semibold">Ações</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php if (empty($medicos)): ?>
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-gray-500">Nenhum médico cadastrado</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($medicos as $medico): ?>
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 text-sm text-gray-700"><?php echo $medico->id; ?></td>
                            <td class="px-6 py-4 text-sm text-gray-700"><?php echo htmlspecialchars($medico->nome); ?></td>
                            <td class="px-6 py-4 text-sm text-gray-700"><?php echo htmlspecialchars($medico->crm); ?></td>
                            <td class="px-6 py-4 text-sm text-gray-700">
                                <?php
                                $nomesEspecialidades = array_map(function ($e) {
                                    return htmlspecialchars($e->nome);
                                }, $medico->especialidades);
                                
                                if (empty($nomesEspecialidades)) {
                                    echo '<span class="text-gray-400 italic">Nenhuma</span>';
                                } else {
                                    echo implode(', ', $nomesEspecialidades);
                                }
                                ?>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                <div class="flex space-x-3">
                                    <a href="?action=editarMedico&id=<?php echo $medico->id; ?>" 
                                       class="inline-flex items-center text-sm text-green-700 hover:text-green-800 font-medium">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                        </svg>
                                        Editar
                                    </a>
                                    <a href="?action=excluirMedico&id=<?php echo $medico->id; ?>" 
                                       class="inline-flex items-center text-sm text-red-600 hover:text-red-800 font-medium"
                                       onclick="return confirm('Tem certeza que deseja excluir este médico?')">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        Excluir
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>