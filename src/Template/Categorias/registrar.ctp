<div class="page-header">
    <h2>Mantenimiento de Categorias</h2>
</div>

<?= $this->Form->create($categoria); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Registro de categoria</h3>
        </div>
        <div class="panel-body">
            
            <div class="form-group">
                <?= $this->Form->control('nombre',['class' => 'form-control', 'maxLength'=>20, 'label' => 'Nombre']) ?>
            </div>
            
            <div class="form-group">
                <?= $this->Form->control('orden',['class' => 'form-control', 'maxLength'=>11, 'label' => 'Orden']) ?>
            </div>
         </div>
        <div class="panel-footer">
            <div class="btn-toolbar">
                <?= $this->Form->submit('Guardar', ['class' => 'btn btn-primary']); ?>
                <?= $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-default'])?>
            </div>
        </div>
    </div>
<?= $this->Form->end(); ?>
