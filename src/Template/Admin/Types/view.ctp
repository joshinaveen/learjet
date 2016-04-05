<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Type'), ['action' => 'edit', $type->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Type'), ['action' => 'delete', $type->id], ['confirm' => __('Are you sure you want to delete # {0}?', $type->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Families'), ['controller' => 'Families', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Family'), ['controller' => 'Families', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Service Centers'), ['controller' => 'ServiceCenters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service Center'), ['controller' => 'ServiceCenters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="types view large-9 medium-8 columns content">
    <h3><?= h($type->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Family') ?></th>
            <td><?= $type->has('family') ? $this->Html->link($type->family->name, ['controller' => 'Families', 'action' => 'view', $type->family->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($type->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($type->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($type->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($type->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Service Centers') ?></h4>
        <?php if (!empty($type->service_centers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Type Id') ?></th>
                <th><?= __('Region Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Full Address') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($type->service_centers as $serviceCenters): ?>
            <tr>
                <td><?= h($serviceCenters->id) ?></td>
                <td><?= h($serviceCenters->type_id) ?></td>
                <td><?= h($serviceCenters->region_id) ?></td>
                <td><?= h($serviceCenters->name) ?></td>
                <td><?= h($serviceCenters->full_address) ?></td>
                <td><?= h($serviceCenters->created) ?></td>
                <td><?= h($serviceCenters->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ServiceCenters', 'action' => 'view', $serviceCenters->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'ServiceCenters', 'action' => 'edit', $serviceCenters->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ServiceCenters', 'action' => 'delete', $serviceCenters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceCenters->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
