<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evento'), ['action' => 'edit', $evento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evento'), ['action' => 'delete', $evento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Eventos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consejos Comunales'), ['controller' => 'ConsejosComunales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consejos Comunale'), ['controller' => 'ConsejosComunales', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eventos view large-9 medium-8 columns content">
    <h3><?= h($evento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Consejos Comunale') ?></th>
            <td><?= $evento->has('consejos_comunale') ? $this->Html->link($evento->consejos_comunale->nombre, ['controller' => 'ConsejosComunales', 'action' => 'view', $evento->consejos_comunale->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($evento->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Lugar') ?></th>
            <td><?= h($evento->lugar) ?></td>
        </tr>
        <tr>
            <th><?= __('Foto') ?></th>
            <td><?= h($evento->foto) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($evento->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha') ?></th>
            <td><?= h($evento->fecha) ?></td>
        </tr>
        <tr>
            <th><?= __('Hora') ?></th>
            <td><?= h($evento->hora) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($evento->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($evento->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($evento->descripcion)); ?>
    </div>
</div>
