<?php
ob_start();
?>

<a href="../../Controller/Appartement/add.php" class="btn btn-primary float-end">Ajouter un appartement</a>
<table id="example" class="table">
    <thead>
        <tr>
            <th>Référence</th>
            <th>Propriétaire</th>
            <th>Localité</th>
            <th>Surface</th>
            <th>Usage</th>
            <th>Nb pièces</th>
            <th>Espace commun</th>
            <th>Action</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($lesApp as $app) {
        ?>
            <tr>
                <td><?= $app[0] ?></td>
                <td><?= $app[1] ?></td>
                <td><?= $app[2] ?></td>
                <td><?= $app[3] ?></td>
                <td><?= $app[4] ?></td>
                <td><?= $app[5] ?></td>
                <td><?= $app[8] ?></td>
                <td><a href="update.php?ref=<?= $app[0] ?>" class="btn btn-success btn-sm">Modifier</a></td>
                <td><a href="delete.php?ref=<?= $app[0] ?>" class="btn btn-danger btn-sm">Supprimer</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
$contenu = ob_get_clean();
$titre = "Liste des appartements";
include "layout.php";
