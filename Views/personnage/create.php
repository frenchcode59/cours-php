<?php require_once 'Views/head.php'; ?>

<form action="../personnage/create" method="post">
    <div class="form-group">
        <label for="name">Nom du personnage</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <button class="btn btn-primary">Ajouter</button>
</form>

<?php require_once 'Views/foot.php'; ?>