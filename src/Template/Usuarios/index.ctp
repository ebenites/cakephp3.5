<div class="page-header">
    <h2>Mantenimiento de Usuarios</h2>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Lista de Usuarios</h2>
    </div>
    
    <table class="table">
        <thead>
            <th width="80">ID</th>
            <th>Username</th>
            <th>Nombres</th>
            <th>Roles</th>
            <th>Email</th>
            <th width="80">&nbsp;</th>
            <th width="80">&nbsp;</th>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario){ ?>
            <tr>
                <td><?=$usuario->id?></td>
                <td><?=$usuario->username?></td>
                <td><?=$usuario->nombres?></td>
                <td><?=$usuario->rol->nombre?></td>
                <td><?=$usuario->email?></td>
                <td><?=$this->Html->link('Editar', ['controller' => 'Usuarios', 'action' => 'editar', $usuario->id], ['class' => 'btn btn-warning'])?></td>
                <td><?=$this->Html->link('Eliminar', ['controller' => 'Usuarios', 'action' => 'eliminar', $usuario->id], ['class' => 'btn btn-danger'])?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
             
    <div class="panel-footer">
        <?= $this->Html->link('Nuevo', ['controller' => 'Usuarios', 'action' => 'registrar'], ['class' => 'btn btn-primary'])?>
    </div>
</div>
