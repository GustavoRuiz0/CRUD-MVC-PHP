<?php $render('header'); ?>

<a href="<?= $base; ?>/novo">Novo Usuario</a>

<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>EMAIL</td>
        <td>AÇÕES</td>
    </tr>
</table>

<?php foreach ($usuarios as $Usuario): ?>
    <tr>
        <td>
            <?= $Usuario['id']; ?>
        </td>

        <td>
            <?= $Usuario['nome']; ?>
        </td>

        <td>
            <?= $Usuario['email']; ?>
        </td>

        <td>
            <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">[editar]</a>
            <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir">[editar]</a>
        </td>

    </tr>
<?php endforeach; ?>


<?php $render('footer'); ?>