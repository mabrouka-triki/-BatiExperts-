<?php require_once __DIR__ . '/template/header.php'; ?>';

<h2 class="mb-4">⊕ Créer un nouveau client</h2>

<form action="?action=store" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name :</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone :</label>
        <textarea class="form-control" id="phone" name="phone" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="mail" class="form-label">Mail :</label>
        <textarea class="form-control" id="mail" name="mail" rows="3" required></textarea>
      
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<a href="?" class="btn btn-secondary">Retour à la liste</a>

<?php require_once __DIR__ . '/templates/footer.php'; 