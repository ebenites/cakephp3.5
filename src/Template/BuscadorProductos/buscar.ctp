<div class="page-header">
    <h2>Buscador de Productos</h2>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Resultado de búsqueda</h3>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CATEGORIA</th>
                <th>PRECIO</th>
                <th>STOCK</th>
                <th>CREADO</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($productos as $producto){ ?>
            <tr>
                <td><?=$producto->id?></td>
                <td><?=h($producto->nombre)?></td>
                <td><?=$producto->categoria->nombre?></td>
                <td><?=$producto->precio?></td>
                <td><?=$producto->stock?></td>
                <td><?=$producto->creado->format('d-m-Y')?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="panel-footer">
	<?=$this->Html->link('Regresar', '/buscador-productos/', ['class' => 'btn btn-default'])?>
    </div>
</div>