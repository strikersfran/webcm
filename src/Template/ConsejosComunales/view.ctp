<?php
    $this->Html->addCrumb('Consejo Comunal',['controller' => 'consejos_comunales']);
    $this->Html->addCrumb('Ver', ['controller' => 'consejos_comunales','action'=>'view',$consejosComunale->id]);     
    echo $this->Html->getCrumbList();
?>
<div class="container jumbotron">
    <div class="row">
        <div class="col-lg-12">
            <h3><strong><?= __('Consejo Comunal').' '. h($consejosComunale->nombre) ?> <?= $this->Html->link('', ['action' => 'edit', $consejosComunale->id], ['class' => "fa fa-pencil fa-fw"]) ?></strong></h3>
        </div>
        <div class="col-lg-12">
            <h4><strong><?= __('Direccion') ?></strong></h4>
            <p><?= h($consejosComunale->direccion) ?></p>
        </div>
        <div class="col-lg-12">
            <h4><strong><?= __('Misión') ?></strong></h4>
            <p><?= h($consejosComunale->mision) ?></p>
        </div>
        <div class="col-lg-12">
            <h4><strong><?= __('Visión') ?></strong></h4>
            <p><?= h($consejosComunale->vision) ?></p>
        </div>
        <div class="col-lg-12">
            <h4><strong><?= __('Creado') ?></strong></h4>
            <p><?= h($consejosComunale->created) ?></p>
        </div>
        <div class="col-lg-12">
            <h4><strong><?= __('Modificado') ?></strong></h4>
            <p><?= h($consejosComunale->modified) ?></p>
        </div>
    </div>    
</div>

<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Consejos Comunale'), ['action' => 'edit', $consejosComunale->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Consejos Comunale'), ['action' => 'delete', $consejosComunale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consejosComunale->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Consejos Comunales'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consejos Comunale'), ['action' => 'add']) ?> </li>
    </ul>
</nav>-->

