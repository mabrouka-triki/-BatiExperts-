<?php require_once __DIR__ . '/template/header.php'; ?>

<h2 class="mb-4">✏️ Modifier une commande </h2>

<form action="?action=update" method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars($order->getId()) ?>">

    <div class="mb-3">
        <label for="title" class="form-label">Titre :</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= htmlspecialchars($order->getTitle()) ?>" required>
    </div>

    <div class="mb-3">
        <label for="status" class="form-label">Statut :</label>
        <select class="form-control" name="status" id="status">
            <option value="A faire" <?= $order->getStatus() == 'A faire' ? 'selected' : '' ?>>A faire</option>
            <option value="En cours" <?= $order->getStatus() == 'En cours' ? 'selected' : '' ?>>En cours</option>
            <option value="En attente" <?= $order->getStatus() == 'En attente' ? 'selected' : '' ?>>En attente</option>
            <option value="Expédié" <?= $order->getStatus() == 'Expédié' ? 'selected' : '' ?>>Expédié</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?" class="btn btn-secondary">Retour à la liste</a>
