<?=$this->Form->create(null, ['id' => 'clientes-form'])?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Registro de Cliente</h2>
    </div>
    <div class="panel-body">
        
        <div class="form-group">
            <?=$this->Form->control('nombres', ['class' => 'form-control'])?>
        </div>
        
        <div class="form-group">
            <?=$this->Form->control('apellidos', ['class' => 'form-control'])?>
        </div>
        
        <div class="form-group">
            <?=$this->Form->control('email', ['class' => 'form-control'])?>
        </div>
        
        <div class="form-group">
            <?=$this->Form->control('password', ['class' => 'form-control'])?>
        </div>
        
    </div>
    <div class="panel-footer">
        <div class="btn-toolbar">
            <?= $this->Form->submit('Guardar', ['class' => 'btn btn-primary']); ?>
        </div>
    </div>
    
</div>
<?=$this->Form->end()?>