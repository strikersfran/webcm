<div class="row">
    <div class="">
        <h3><?= __('Consejo Comunal') ?></h3>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
<!--                        <th><?= $this->Paginator->sort('id') ?></th>-->
                        <th><?= $this->Paginator->sort('nombre') ?></th>
                        <th><?= $this->Paginator->sort('direccion') ?></th>
                        <th><?= $this->Paginator->sort('mision') ?></th>
                        <th><?= $this->Paginator->sort('vision') ?></th>
                        <th class="actions"><?= __('Acciones') ?></th>
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