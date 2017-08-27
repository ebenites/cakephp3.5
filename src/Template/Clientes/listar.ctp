<table class="table">
    <thead>
        <th width="80">ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Fecha de Nacimiento</th>
        <th width="80">&nbsp;</th>
        <th width="80">&nbsp;</th>
        <th width="80">&nbsp;</th>
    </thead>
    <tbody>
        <?php foreach($clientes as $cliente){ ?>
        <tr>
            <td><?=$cliente->id?></td>
            <td><?=$cliente->nombres?></td>
            <td><?=$cliente->apellidos?></td>
            <td><?=$cliente->email?></td>
            <td><?=$cliente->nacimiento?></td>
            <td><?=$this->Html->link('Mostrar', ['controller' => 'Clientes', 'action' => 'mostrar', $cliente->id], ['class' => 'btn btn-info'])?></td>
            <td><?=$this->Html->link('Editar', ['controller' => 'Clientes', 'action' => 'editar', $cliente->id], ['class' => 'btn btn-warning'])?></td>
            <td><?=$this->Html->link('Eliminar', ['controller' => 'Clientes', 'action' => 'eliminar', $cliente->id], ['class' => 'btn btn-danger'])?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>