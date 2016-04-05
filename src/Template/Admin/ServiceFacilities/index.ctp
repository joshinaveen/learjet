<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Service Facilities list</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo $this->Url->build('/admin'); ?>">Home</a>
            </li>
            <li class="active">
                <strong>Service Facilities</strong>
            </li>
        </ol>
    </div>
</div>
<?php echo $this->Flash->render(); ?>
<?php echo $this->Flash->render('auth'); ?>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Listing of Service Facilities</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <?php if ($serviceFacilities->isEmpty()): ?>
                        <h2>No Service Facility found.</h2>
                    <?php else: ?>
                    <?php echo $this->element('pagination'); ?>
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="8">
                        <thead>
                            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('facility_name') ?></th>
                                <th><?= $this->Paginator->sort('family_id', 'Family') ?></th>
                                <th><?= $this->Paginator->sort('type_id', 'Type') ?></th>
                                <th><?= $this->Paginator->sort('region_id', 'Region') ?></th>
                                <th data-hide="all"><?= $this->Paginator->sort('active') ?></th>
                                <th data-hide="all"><?= $this->Paginator->sort('created') ?></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($serviceFacilities as $serviceFacility): ?>
                                <tr>
                                    <td><?= $this->Number->format($serviceFacility->id) ?></td>
                                    <td><?= h($serviceFacility->facility_name) ?></td>
                                    <td><?= $serviceFacility->has('family') ? $this->Html->link($serviceFacility->family->family, ['controller' => 'Families', 'action' => 'edit', $serviceFacility->family->id]) : '' ?></td>
                                    <td><?= $serviceFacility->has('type') ? $this->Html->link($serviceFacility->type->type, ['controller' => 'Types', 'action' => 'edit', $serviceFacility->type->id]) : '' ?></td>
                                    <td><?= $serviceFacility->has('region') ? $this->Html->link($serviceFacility->region->region, ['controller' => 'Regions', 'action' => 'edit', $serviceFacility->region->id]) : '' ?></td>
                                    <td>
                                        <i class="fa <?php echo $serviceFacility->active ? 'fa-check text-navy' : 'fa-times text-danger'; ?>"></i>
                                    </td>
                                    <td><?= h($serviceFacility->created) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link('<i class="fa fa-edit"></i>',
                                                ['action' => 'edit', $serviceFacility->id],
                                                ['class' => 'btn btn-white', 'escape' => false]) ?>
                                        <?= $this->Form->postLink('<i class="fa fa-trash"></i>', 
                                                ['action' => 'delete', $serviceFacility->id], 
                                                ['confirm' => __('Are you sure you want to delete # {0}?', $serviceFacility->id), 
                                                    'class' => 'btn btn-white', 'escape' => false]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                </tbody>
                            </table>
                             <?php echo $this->element('pagination'); ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
</div>
