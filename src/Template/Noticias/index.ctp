<div class="row">
    <div class="">
        <h3><?= __('Noticias') ?></h3>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('consejos_comunales_id') ?></th>
                        <th><?= $this->Paginator->sort('titulo') ?></th>
                        <th><?= $this->Paginator->sort('fecha') ?></th>
                        <th><?= $this->Paginator->sort('hora') ?></th>
                        <th><?= $this->Paginator->sort('foto') ?></th>
<!--                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>-->
                        <th class="actions"><?= __('Aciones') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($consejosComunales as $consejosComunale): ?>
                    <tr>
<!--                        <td><?= $this->Number->format($consejosComunale->id) ?></td>-->
                        <td><?= h($consejosComunale->nombre) ?></td>
                        <td><?= h($consejosComunale->direccion) ?></td>
                        <td><?= h($consejosComunale->mision) ?></td>
                        <td><?= h($consejosComunale->vision) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('', ['action' => 'view', $consejosComunale->id], ['class' => "fa fa-eye fa-fw"]) ?>
                            <?= $this->Html->link('', ['action' => 'edit', $consejosComunale->id], ['class' => "fa fa-pencil fa-fw"]) ?>                            
                        </td>
                    </tr>
                    <?php endforeach; ?>                    
                </tbody>
            </table>
        </div>        
    </div>
</div>
<div class="noticias index large-9 medium-8 columns content">
    <h3><?= __('Noticias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('consejos_comunales_id') ?></th>
                <th><?= $this->Paginator->sort('titulo') ?></th>
                <th><?= $this->Paginator->sort('fecha') ?></th>
                <th><?= $this->Paginator->sort('hora') ?></th>
                <th><?= $this->Paginator->sort('foto') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($noticias as $noticia): ?>
            <tr>
                <td><?= $this->Number->format($noticia->id) ?></td>
                <td><?= $this->Number->format($noticia->consejos_comunales_id) ?></td>
                <td><?= h($noticia->titulo) ?></td>
                <td><?= h($noticia->fecha) ?></td>
                <td><?= h($noticia->hora) ?></td>
                <td><?= h($noticia->foto) ?></td>
                <td><?= h($noticia->created) ?></td>
                <td><?= h($noticia->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $noticia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $noticia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $noticia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $noticia->id)]) ?>
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
