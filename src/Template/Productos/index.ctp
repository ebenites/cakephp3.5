<div class="page-header">
    <h2>Mantenimiento de Productos</h2>
</div>

<div class="panel panel-default table-responsive">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de productos</h3>
    </div>
    <table class="table">
        <thead>
            <th width="50">ID</th>
            <th>Nombre</th>
            <th>Cateoría</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Imagen</th>
            <th>Descripción</th>
            <th width="80">&nbsp;</th>
            <th width="80">&nbsp;</th>
        </thead>
        <tbody>
        <?php
            foreach ($productos as $producto) {
        ?>
            <tr>
                <td><?= $producto->id ?></td>
                <td><?= h($producto->nombre) ?></td>
                <td><?= $producto->categoria->nombre ?></td>
                <td><?= $producto->precio ?></td>
                <td><?= $producto->stock ?></td>
                <td><?= $this->Html->link( $this->Html->image(['controller' => 'productos', 'action' => 'imagen', $producto->id], ['height' => 32]) , ['controller' => 'productos', 'action' => 'imagen', $producto->id], ['class' => 'colorbox', 'escape' => false])?></td>
                <td><?= h($producto->descripcion) ?></td>
                <td><?= $this->Html->link('Editar', ['controller' => 'Productos', 'action' => 'editar', $producto->id], ['class' => 'btn btn-warning']) ?></td>
                <td><?= $this->Html->link('Eliminar', ['controller' => 'Productos', 'action' => 'eliminar', $producto->id], ['class' => 'btn btn-danger']) ?></td>
            </tr>
        <?php
            }
        ?>
       </tbody>
    </table>
    <div class="panel-footer">
        <?= $this->Html->link('Nuevo', ['controller' => 'Productos', 'action' => 'registrar'], ['class' => 'btn btn-primary'])?>
    </div>
</div>

<script>
    $(function(){
        $('a.colorbox').colorbox({
            photo:true
        });
    })
</script>