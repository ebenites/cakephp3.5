<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Tienda Virtual:<?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css('bootstrap.min')?>
    <?= $this->Html->css('bootstrap-theme.min')?>
    <?= $this->Html->css('colorbox')?>
    <?= $this->Html->css('style')?>
    
    <?= $this->Html->script('jquery-3.2.1.min')?>
    <?= $this->Html->script('bootstrap.min')?>
    <?= $this->Html->script('jquery.colorbox-min')?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- logo -->
            <div class="navbar-header">
                <!-- boton para el menu desplegable -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <?=$this->Html->image('logo.svg', ['height' => 24])?>
                </a>
            </div>

            <!-- menu de opciones -->
            <div class="collapse navbar-collapse" id="top-menu">

                <ul class="nav navbar-nav">
                    <li><?=$this->Html->link('Inicio', '/')?></li>
                    <li><a href="#">Contacto</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><?=$this->Html->link('Ingresar', ['controller' => 'usuarios', 'action' => 'login'])?></li>
                </ul>
            </div>

        </div>
    </nav>
    
    <div class="container-fluid">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
    
</body>
</html>
