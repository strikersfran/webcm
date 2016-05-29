<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'WebCM';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!--bootstarp-->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    
    <!--css de la aplicacion-->
    <?= $this->Html->css('frontend.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?= $cakeDescription ?></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">                
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><?= $this->Html->link(__('Inicio'), ['controller' => 'Noticias', 'action' => 'display']) ?></li>
                    <li><?= $this->Html->link(__('Noticias'), ['controller' => 'Noticias', 'action' => 'display']) ?></li>
                    <li><?= $this->Html->link(__('Eventos'), ['controller' => 'Noticias', 'action' => 'display']) ?></li>
                    <li><?= $this->Html->link(__('Directiva'), ['controller' => 'Noticias', 'action' => 'display']) ?></li>
                    <li><?= $this->Html->link(__('Sobre Nosotros'), ['controller' => 'Noticias', 'action' => 'display']) ?></li>                    
                    <li><?= $this->Html->link(__('Login'),['controller'=>'Users','action'=>'login']) ?></li>
                </ul>
            </div>            
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container-fluid">        
        <?= $this->fetch('content') ?>        
    </div>    
    <footer>
    </footer>
    <?= $this->Html->script('jquery.js'); ?>
    <?= $this->Html->script('bootstrap.min.js'); ?>
    <?= $this->Html->script('frontend.js'); ?>
</body>
</html>
