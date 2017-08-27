<div class="jumbotron">
    <h4>Bievenido <?=$nombres?></h4>
</div>


<ul>
    <?php foreach($amigos as $amigo){ ?>
    <li><?=$amigo?></li>
    <?php } ?>
</ul>


<form action="/cakephp/test/post" method="post">
    <input name="nombres" placeholder="Ingrese nombres">
    <input type="text" name="apellidos" placeholder="Ingrese apellidos">
    <input type="submit" value="Registrar">
</form>