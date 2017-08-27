<form action="/cakephp/buscador/" method="post">
    <div class="form-group">
        <input type="text" name="nombres" placeholder="Ingresa nombres" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary">
    </div>
</form>

<?php if(isset($usuarios)){ ?>

<table class="table">
    <thead>
        <th>ID</th>
        <th>USERNAME</th>
        <th>EMAIL</th>
        <th>ROLE</th>
    </thead>
    <tbody>
        <?php foreach($usuarios as $usuario){?>
        <tr>
            <td><?=$usuario['id']?></td>
            <td><?=$usuario['username']?></td>
            <td><?=$usuario['email']?></td>
            <td><?=$usuario['roles_nombre']?></td>
        </tr>
        <?php }?>
    </tbody>
</table>

<?php }?>