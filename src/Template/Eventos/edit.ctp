<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $evento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Eventos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consejos Comunales'), ['controller' => 'ConsejosComunales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consejos Comunale'), ['controller' => 'ConsejosComunales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventos form large-9 medium-8 columns content">
    <?= $this->Form->create($evento) ?>
    <fieldset>
        <legend><?= __('Edit Evento') ?></legend>
        <?php
            echo $this->Form->input('consejos_comunales_id', ['options' => $consejosComunales]);
            echo $this->Form->input('nombre');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('fecha', ['empty' => true]);
            echo $this->Form->input('hora', ['empty' => true]);
            echo $this->Form->input('lugar');
            echo $this->Form->input('foto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
