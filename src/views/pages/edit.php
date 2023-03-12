<?php $render('header');?>

<h2>Editar Usuario</h2>

<form method="POST" action="<?=$base;?>/usuario/<?=$usuario['id'];?>">
    <label>
        Nome: <br>
        <input type="text" name="name" value="<?=$usuario['nome'];?>>
    </label> <br><br>

    <label>
        Email: <br>
        <input type="text" name="email" value="<?=$usuario['email'];?>>
    </label> <br><br>

    <input type="submit" value="Enviar">
</form>

<?php $render('footer');?>
