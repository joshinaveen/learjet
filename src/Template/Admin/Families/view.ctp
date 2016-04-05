<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Family'), ['action' => 'edit', $family->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Family'), ['action' => 'delete', $family->id], ['confirm' => __('Are you sure you want to delete # {0}?', $family->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Families'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Family'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="families view large-9 medium-8 columns content">
    <h3><?= h($family->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($family->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($family->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($family->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($family->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Types') ?></h4>
        <?php if (!empty($family->types)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Family Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($family->types as $types): ?>
            <tr>
                <td><?= h($types->id) ?></td>
                <td><?= h($types->family_id) ?></td>
                <td><?= h($types->name) ?></td>
                <td><?= h($types->created) ?></td>
                <td><?= h($types->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Types', 'action' => 'view', $types->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Types', 'action' => 'edit', $types->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Types', 'action' => 'delete', $types->id], ['confirm' => __('Are you sure you want to delete # {0}?', $types->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
