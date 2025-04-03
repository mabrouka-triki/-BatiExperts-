<?php require_once __DIR__ . '/template/header.php'; ?>

<h2 class="mb-4">✏️ Modifier une commande </h2>

<form action="?action=update" method="POST">
    <input type="hidden" name="id" value="<?= $order->getId() ?>">

    <div class="mb-3">
        <label for="title" class="form-label">Titre :</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= $order->getTitle() ?>" required>
    </div>
 

    <div class="mb-3">
        <?php

        $status = $order->getStatus();

        ?>
        <label for="Statut" class="form-label">Statut :</label>
        <select class="form-control" name="status" id="status">
            <option <?= $status == ' En cours ' ? 'selected' : '' ?> value="A faire"> En cours</option>
            <option <?= $status == 'En attente ' ? 'selected' : '' ?> value="En cours"> En attente </option>
            <option <?= $status == ' expédié' ? 'selected' : '' ?> value="expédié">expédié</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?" class="btn btn-secondary">Retour à la liste</a>


