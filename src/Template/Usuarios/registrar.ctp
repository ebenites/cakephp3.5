<div class="page-header">
    <h2>Mantenimiento de Usuarios</h2>
</div>

<?=$this->Form->create($usuario)?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Registro de Usuario</h2>
    </div>
    <div class="panel-body">
        
        <div class="form-group">
            <?=$this->Form->control('username', ['class' => 'form-control'])?>
        </div>
        
        <div class="form-group">
            <?=$this->Form->control('password', ['class' => 'form-control'])?>
        </div>
        
        <div class="form-group">
            <?=$this->Form->control('roles_id', ['class' => 'form-control', 'empty' => true])?>
        </div>
        
        <div class="form-group">
            <?=$this->Form->control('nombres', ['class' => 'form-control'])?>
        </div>
        
        <div class="form-group">
            <?=$this->Form->control('email', ['class' => 'form-control'])?>
        </div>
        
    </div>
    <div class="panel-footer">
        <div class="btn-toolbar">
            <?= $this->Form->submit('Guardar', ['class' => 'btn btn-primary']); ?>
            <?= $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-default'])?>
        </div>
    </div>
    
</div>
<?=$this->Form->end()?>