<?php require_once __DIR__ . '/template/header.php'; ?>

<h2 class="mb-4">📋 Liste des commandes</h2>

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
        // Vérifier si $orders contient des données
        if (!empty($orders)): 
            foreach($orders as $order): 
        ?>
            <tr>
                <td><?= htmlspecialchars($order->getId()); ?></td>
                <td><a href="?action=view&id=<?= $order->getId(); ?>"><?= htmlspecialchars($order->getTitle()); ?></a></td>
                <td><?= htmlspecialchars($order->getStatus()); ?></td>
                <td>
                    <a href="?action=view&id=<?= $order->getId() ?>" class="btn btn-primary btn-sm">👀</a>
                    <a href="?action=edit&id=<?= $order->getId() ?>" class="btn btn-warning btn-sm">✏️</a>
                    <a onclick="return confirm('T’es sûr ?');" href="?action=delete&id=<?= $order->getId() ?>" class="btn btn-dark btn-sm">❌</a>
                </td>
            </tr>
        <?php endforeach; else: ?>
            <tr><td colspan="4">Aucune commande disponible.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/template/footer.php'; ?>