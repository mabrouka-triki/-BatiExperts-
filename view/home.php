<?php require_once __DIR__ . '/template/header.php'; ?>';

    <div class="container mt-5">
        <h2 class="mb-4">📋 Liste des clients</h2>

        <table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php 

        if (!empty($clients)): 
            foreach($clients as $client): 
        ?>
            <tr>
                <td><?= htmlspecialchars($client->getId()); ?></td>
                <td><a href="?action=view&id=<?= $client->getId(); ?>"><?= htmlspecialchars($client->getName()); ?></a></td>
                <td>
                    <a href="?action=view&id=<?= $client->getId() ?>" class="btn btn-primary btn-sm">👀</a>
                    <a href="?action=edit&id=<?= $client->getId() ?>" class="btn btn-warning btn-sm">✏️</a>
                    <a onclick="return confirm('T’es sûr ?');" href="?action=delete&id=<?= $client->getId() ?>" class="btn btn-dark btn-sm">❌</a>
                </td>
            </tr>
        <?php endforeach; else: ?>
            <tr><td colspan="4">Aucun client disponible.</td></tr>
        <?php endif; ?>
    </tbody>
</table>
    </div>

</body>
</html>