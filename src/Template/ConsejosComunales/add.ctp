<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Consejos Comunales'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="consejosComunales form large-9 medium-8 columns content">
    <?= $this->Form->create($consejosComunale) ?>
    <fieldset>
        <legend><?= __('Add Consejos Comunale') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('direccion');
            echo $this->Form->input('mision');
            echo $this->Form->input('vision');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
