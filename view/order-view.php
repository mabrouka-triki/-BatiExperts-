<?php require_once __DIR__ . '/template/header.php'; ?>

<h2 class="mb-4">📋 Détail de commande</h2>

<p><strong>id : </strong> <?= htmlspecialchars($order->getId()) ?></p>
<p><strong> Status : </strong> <?= htmlspecialchars($order->getStatus()) ?></p>
<p><strong> Titre : </strong> <?= htmlspecialchars($order->getTitle()) ?></p>

<a href="?action=edit&id=<?= htmlspecialchars($order->getId()) ?>" class="btn btn-warning">Modifier la commande </a>

<a href="?" class="btn btn-secondary">Retour à la liste</a>




