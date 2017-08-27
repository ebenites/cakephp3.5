<div class="page-header">
    <h2>Mantenimiento de Categorias</h2>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de categorias</h3>
    </div>
    <table class="table">
        <thead>
            <th width="80">ID</th>
            <th>Nombre</th>
            <th width="80">&nbsp;</th>
            <th width="80">&nbsp;</th>
        </thead>
        <tbody>
        <?php  foreach ($categorias as $categoria) {  ?>
            <tr>
                <td><?= $categoria->id ?></td>
                <td><?= $categoria->nombre ?></td>
                <td><?= $this->Html->link('Editar', ['controller' => 'Categorias', 'action' => 'editar', $categoria->id],['class' => 'btn btn-warning']) ?></td>
                <td><?= $this->Html->link('Eliminar', ['controller' => 'Categorias', 'action' => 'eliminar', $categoria->id], ['class' => 'btn btn-danger']) ?></td>
            </tr>
        <?php  }  ?>
       </tbody>
    </table>
    <div class="panel-footer">
        <?= $this->Html->link('Nuevo', ['controller' => 'Categorias', 'action' => 'registrar'], ['class' => 'btn btn-primary'])?>
    </div>
