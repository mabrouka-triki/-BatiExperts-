<?php require_once __DIR__ . '/template/header.php'; ?>';

<h2 class="mb-4">✏️ Modifier une tâche</h2>

<form action="?action=update" method="POST">
    <input type="hidden" name="id" value="<?= $client->getId() ?>">
    <div class="mb-3">
        <label for="title" class="form-label">Name :</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $client->getName() ?>" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone :</label>
        <textarea class="form-control" id="phone" name="phone" rows="3" required><?= $client->getPhone() ?></textarea>
    </div>
    <div class="mb-3">
    <label for="mail" class="form-label">Mail :</label>
    <textarea class="form-control" id="mail" name="mail" rows="3" required><?= $client->getMail() ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?" class="btn btn-secondary">Retour à la liste</a>

