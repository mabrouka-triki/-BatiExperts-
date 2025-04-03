<?php require_once __DIR__ . '/template/header.php'; ?>';

<h2 class="mb-4">📋 Détail de la tâche</h2>

<p><strong>Id : </strong> <?= htmlspecialchars($client->getId()) ?></p>
<p><strong>Name : </strong> <?= htmlspecialchars($client->getName()) ?></p>
<p><strong>Phone : </strong> <?= htmlspecialchars ($client->getPhone()) ?></p>
<p><strong>Mail : </strong> <?= htmlspecialchars ($client->getMail()) ?></p>

<a href="?action=edit&id=<?= htmlspecialchars($client->getId()) ?>" class="btn btn-warning">Modifier la tâche</a>
<a href="?" class="btn btn-secondary">Retour à la liste</a>

