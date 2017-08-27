<div class="page-header">
    <h2>Mantenimiento de Productos</h2>
</div>

<?= $this->Form->create($producto, ['type' => 'file']); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Actualización de producto</h3>
        </div>
        <div class="panel-body">
            
            <?= $this->Form->hidden('id') ?>
            
            <div class="form-group">
                <?= $this->Form->control('categorias_id', ['class' => 'form-control', 'type' => 'select', 'multiple' => false, 'options' => $categorias, 'empty' => true]) ?>
            </div>
            
            <div class="form-group">
                <?= $this->Form->control('nombre',['class' => 'form-control', 'maxLength'=>100, 'label' => 'Nombre']) ?>
            </div>
            
            <div class="form-group">
                <?= $this->Form->control('precio',['class' => 'form-control', 'maxLength'=>10, 'label' => 'Precio']) ?>
            </div>
            
            <div class="form-group">
                <?= $this->Form->control('stock',['class' => 'form-control', 'maxLength'=>10, 'label' => 'Stock']) ?>
            </div>
            
            <div class="form-group">
                <?= $this->Form->control('imagen', ['class' => 'form-control', 'type' => 'file', 'label' =>'Imagen']) ?>
            </div>
            
            <div class="form-group">
                <?= $this->Form->control('descripcion',['class' => 'form-control', 'rows'=>'5', 'label' => 'Descripción']) ?>
            </div>
            
        </div>
            
        <div class="panel-footer">
            <div class="btn-toolbar">
                <?= $this->Form->submit('Guardar', ['class' => 'btn btn-primary']); ?>
                <?= $this->Html->link('Cancelar', ['controller' => 'Productos', 'action' => 'index'], ['class' => 'btn btn-default'])?>
            </div>
        </div>
    </div>
<?= $this->Form->end(); ?>
