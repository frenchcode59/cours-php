<?php require_once 'Views/head.php'; ?>

<a href="../perso/create">Ajouter un Personnage</a>

<table class="table">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Classe</th>
    <th>Race</th>
    <th>Attaque</th>
    <th>Defense</th>
  </tr>
  <?php foreach ($persos as $perso) : ?>
    <tr>
      <td><?= $perso->getId() ?></td>
      <td><?= $perso->getName() ?></td>
      <td><?= $perso->getClasse() ?></td>
      <td><?= $perso->getRace() ?></td>
      <td><?= $perso->getAttaque() ?></td>
      <td><?= $perso->getDefense() ?></td>
    </tr>
  <?php endforeach; ?>
</table>

<?php require_once 'Views/foot.php'; ?>
