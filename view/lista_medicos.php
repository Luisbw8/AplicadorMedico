<?php include 'includes/header.php'; ?>

<a href="?action=cadastrarMedico" 
   
class="inline-flex items-center gap-2 bg-green-700  text-white py-3 px-6 rounded-lg font-medium text-sm shadow-md hover:shadow-lg transition-all duration-200 hover:bg-gradient-to-r hover:from-emerald-600 hover:to-green-700 transform hover:-translate-y-0.5 focus:ring-2 focus:ring-emerald-400 focus:ring-opacity-50 focus:outline-none">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
    </svg>
    
    Cadastrar Novo Médico
</a>
<br>
<br>
    <table class="min-w-full table-auto border-collapse bg-gray-100 rounded-lg shadow-md overflow-hidden">
    <thead>
    <tr class="bg-green-500  text-white shadow-md">
        <th class="px-6 py-4 text-left text-sm font-semibold border-r border-emerald-400/30">ID</th>
        <th class="px-6 py-4 text-left text-sm font-semibold border-r border-emerald-400/30">Nome</th>
        <th class="px-6 py-4 text-left text-sm font-semibold border-r border-emerald-400/30">CRM</th>
        <th class="px-6 py-4 text-left text-sm font-semibold border-r border-emerald-400/30">Especialidades</th>
        <th class="px-6 py-4 text-left text-sm font-semibold">Ações</th>
    </tr>
</thead>
        <tbody>
            <?php foreach ($medicos as $medico): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-700"><?php echo $medico->id; ?></td>
                    <td class="px-6 py-4 text-sm text-gray-700"><?php echo htmlspecialchars($medico->nome); ?></td>
                    <td class="px-6 py-4 text-sm text-gray-700"><?php echo htmlspecialchars($medico->crm); ?></td>
                    <td class="px-6 py-4 text-sm text-gray-700">
                        <?php
                        $nomesEspecialidades = array_map(function ($e) {
                            return htmlspecialchars($e->nome);
                        }, $medico->especialidades);
                        echo implode(', ', $nomesEspecialidades);
                        ?>
                    </td>
                    <td class="px-6 py-4 text-sm">
                        <a href="?action=editarMedico&id=<?php echo $medico->id; ?>" class="text-blue-600 hover:text-blue-800">Editar</a> |
                        <a href="?action=excluirMedico&id=<?php echo $medico->id; ?>" class="text-red-600 hover:text-red-800" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php'; ?>
