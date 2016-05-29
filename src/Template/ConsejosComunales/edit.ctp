<?php
    $this->Html->addCrumb('Consejo Comunal',['controller' => 'consejos_comunales']);
    $this->Html->addCrumb('Editar', ['controller' => 'consejos_comunales','action'=>'edit',$consejosComunale->id]);     
    echo $this->Html->getCrumbList();
?>

<div class="consejosComunales form large-9 medium-8 columns content">
    <?= $this->Form->create($consejosComunale) ?>
    <fieldset>
        <legend><?= __('Editar Consejo Comunal') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('direccion',['label'=>'Dirección']);
            echo $this->Form->input('mision',['label'=>'Misión']);
            echo $this->Form->input('vision',['label'=>'Visión']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
