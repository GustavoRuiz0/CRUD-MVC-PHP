<?php $render('header');?>

<h2>Adicionar Novo usuario</h2>

<form method="POST" action="<?=$base;?>/novo">
    <label>
        Nome: <br>
        <input type="text" name="name">
    </label> <br><br>

    <label>
        Email: <br>
        <input type="text" name="email">
    </label> <br><br>

    <input type="submit" value="Enviar">
</form>

<?php $render('footer');?>
