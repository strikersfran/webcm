<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Evento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consejos Comunales'), ['controller' => 'ConsejosComunales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consejos Comunale'), ['controller' => 'ConsejosComunales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventos index large-9 medium-8 columns content">
    <h3><?= __('Eventos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('consejos_comunales_id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('fecha') ?></th>
                <th><?= $this->Paginator->sort('hora') ?></th>
                <th><?= $this->Paginator->sort('lugar') ?></th>
                <th><?= $this->Paginator->sort('foto') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventos as $evento): ?>
            <tr>
                <td><?= $this->Number->format($evento->id) ?></td>
                <td><?= $evento->has('consejos_comunale') ? $this->Html->link($evento->consejos_comunale->nombre, ['controller' => 'ConsejosComunales', 'action' => 'view', $evento->consejos_comunale->id]) : '' ?></td>
                <td><?= h($evento->nombre) ?></td>
                <td><?= h($evento->fecha) ?></td>
                <td><?= h($evento->hora) ?></td>
                <td><?= h($evento->lugar) ?></td>
                <td><?= h($evento->foto) ?></td>
                <td><?= h($evento->created) ?></td>
                <td><?= h($evento->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $evento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
