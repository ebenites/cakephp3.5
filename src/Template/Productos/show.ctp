<div class="panel">
    <div class="panel-heading">
        <?=$producto->nombre?>
    </div>
    <div class="panel-body">
        <?=$this->Html->image(['controller' => 'productos', 'action' => 'imagen', $producto->id], ['height' => 500])?>
    </div>
</div>