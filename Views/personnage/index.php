<?php require_once 'Views/head.php'; ?>

<a href="../personnage/create">Ajouter un personnage</a>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
    </tr>
    <?php foreach ($perso as $perso) : ?>
        <tr>
            <td><?= $perso->getId() ?></td>
            <td><?= $perso->getName() ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'Views/foot.php'; ?>