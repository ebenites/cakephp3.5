<div class="page-header">
    <h2>Buscador de Productos</h2>
</div>

<?=$this->Form->create(null, ['url' => '/buscador-productos/buscar'])?>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Criterios de búsqueda</h3>
        </div>
        <div class="panel-body">
            
            <div class="row">
                <div class="col-md-6 col-sm-6 form-group">
                    <?=$this->Form->control('nombre', ['class' => 'form-control'])?>
                </div>
                <div class="col-md-6 col-sm-6 form-group">
                    <?=$this->Form->control('categoria', ['class' => 'form-control', 'label' => 'Categoría', 'empty' => true, 'options' => $categorias])?>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-sm-6 form-group">
                    <?=$this->Form->control('stock', ['class' => 'form-control', 'type' => 'number', 'label' => 'Stock Mínimo'])?>
                </div>
                <div class="col-md-6 col-sm-6 form-group">
                    <?=$this->Form->label('Fecha Desde')?>
                    <?=$this->Form->text('fecha', ['class' => 'form-control', 'type' => 'date'])?>
                    <?=$this->Form->error('fecha')?>
                </div>
            </div>
            
        </div>
        <div class="panel-footer">
            <?= $this->Form->submit('Buscar', ['class' => 'btn btn-primary']); ?>
        </div>
    </div>
    
<?=$this->Form->end()?>