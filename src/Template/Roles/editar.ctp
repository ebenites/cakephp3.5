<div class="page-header">
    <h2>Mantenimiento de Roles</h2>
</div>

<?= $this->Form->create($rol)?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Registro de Rol</h2>
    </div>
    <div class="panel-body">
        
        <?=$this->Form->hidden('id')?>
        
        <div class="form-group">
            <?=$this->Form->control('nombre', ['class' => 'form-control'])?>
        </div>
        
    </div>
    <div class="panel-footer">
        <div class="btn-toolbar">
            <?= $this->Form->submit('Guardar', ['class' => 'btn btn-primary']); ?>
            <?= $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-default'])?>
        </div>
    </div>
</div>
<?= $this->Form->end()?>