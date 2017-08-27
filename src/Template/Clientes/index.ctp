<div class="page-header">
    <h2>Mantenimiento de Clientes</h2>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Lista de Clientes</h2>
    </div>
    
<!--    <div class="panel-body">
        <button onclick="listar()" class="btn btn-default">Cargar</button>
    </div>-->
    
    <div id="clientes-list"></div>
             
    <div class="panel-footer">
        <?= $this->Html->link('Nuevo', ['controller' => 'Clientes', 'action' => 'nuevo'], ['id' => 'clientes-nuevo', 'class' => 'btn btn-primary'])?>
    </div>
</div>

<script>
    $(function(){
        
        $('#clientes-nuevo').colorbox({
            'width': '50%'
        }, function () {
            $('#clientes-form').ajaxForm({
                'success': function(data){
                    bootbox.alert(data);
                    $.colorbox.close();
                    listar();
                },
                'resetForm': true
            });
        });
        
        listar();
        
    });
    
    function listar(){
        $('#clientes-list').load('/cakephp/clientes/listar');
    }
    
    function nuevo(){
        
    }
    
</script>