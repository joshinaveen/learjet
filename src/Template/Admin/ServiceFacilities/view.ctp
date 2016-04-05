<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Service Facility'), ['action' => 'edit', $serviceFacility->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Service Facility'), ['action' => 'delete', $serviceFacility->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceFacility->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Service Facilities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service Facility'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="serviceFacilities view large-9 medium-8 columns content">
    <h3><?= h($serviceFacility->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= $serviceFacility->has('type') ? $this->Html->link($serviceFacility->type->type, ['controller' => 'Types', 'action' => 'view', $serviceFacility->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Region') ?></th>
            <td><?= $serviceFacility->has('region') ? $this->Html->link($serviceFacility->region->id, ['controller' => 'Regions', 'action' => 'view', $serviceFacility->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Facility Name') ?></th>
            <td><?= h($serviceFacility->facility_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Authorization') ?></th>
            <td><?= h($serviceFacility->authorization) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($serviceFacility->country) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= h($serviceFacility->state) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($serviceFacility->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Zip') ?></th>
            <td><?= h($serviceFacility->zip) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($serviceFacility->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Aog Phone') ?></th>
            <td><?= h($serviceFacility->aog_phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Secondary Aog Phone') ?></th>
            <td><?= h($serviceFacility->secondary_aog_phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Asf Excellence Award Winner') ?></th>
            <td><?= h($serviceFacility->asf_excellence_award_winner) ?></td>
        </tr>
        <tr>
            <th><?= __('Aog Email') ?></th>
            <td><?= h($serviceFacility->aog_email) ?></td>
        </tr>
        <tr>
            <th><?= __('Website Url') ?></th>
            <td><?= h($serviceFacility->website_url) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($serviceFacility->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($serviceFacility->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($serviceFacility->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Full Address') ?></h4>
        <?= $this->Text->autoParagraph(h($serviceFacility->full_address)); ?>
    </div>
</div>
