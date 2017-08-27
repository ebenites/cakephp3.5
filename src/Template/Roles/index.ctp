<?php //foreach ($roles as $row) { var_dump($row); } ?>
<div class="page-header">
    <h2>Mantenimiento de Roles</h2>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Registro de Rol</h2>
    </div>
        
    <table class="table">
        <thead>
            <th width="80">ID</th>
            <th>NOMBRE</th>
            <th width="80">&nbsp;</th>
            <th width="80">&nbsp;</th>
        </thead>
        <tbody>
        <?php
            foreach ($roles as $rol) {
        ?>
            <tr>
                <td><?= $rol->id ?></td>
                <td><?= $rol->nombre ?></td>
                <td><?= $this->Html->link('Editar', ['controller' => 'Roles', 'action' => 'editar', $rol->id], ['class' => 'btn btn-warning']) ?></td>
                <td><?= $this->Html->link('Eliminar', '/roles/eliminar/'.$rol->id, ['class' => 'btn btn-danger']) ?></td>
            </tr>
        <?php
            }
        ?>
       </tbody>
    </table>
    
    <div class="panel-footer">
        <?= $this->Html->link('Nuevo', ['controller' => 'Roles', 'action' => 'registrar'], ['class' => 'btn btn-primary'])?>
    </div>
</div>


