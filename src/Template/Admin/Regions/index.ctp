<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Regions list</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo $this->Url->build('/admin'); ?>">Home</a>
            </li>
            <li class="active">
                <strong>Regions</strong>
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
                    <h5>Listing of Regions</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                <?php if ($regions->isEmpty()): ?>
                    <h2>No Regions found.</h2>
                <?php else: ?>
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="8">
                        <thead>
                            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('region') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($regions as $region): ?>
                                <tr>
                                    <td><?= $this->Number->format($region->id) ?></td>
                                    <td><?= h($region->region) ?></td>
                                    <td><?= h($region->created) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link('<i class="fa fa-edit"></i>',
                                                ['action' => 'edit', $region->id],
                                                ['class' => 'btn btn-white', 'escape' => false]) ?>
                                        <?= $this->Form->postLink('<i class="fa fa-trash"></i>', 
                                                ['action' => 'delete', $region->id], 
                                                ['confirm' => __('Are you sure you want to delete # {0}?', $region->id), 
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
<?php $this->start('pluginJs'); ?>
    <?php echo $this->Html->script([
        'plugins/pace/pace.min', 'plugins/footable/footable.all.min'
    ]); ?>
<?php $this->end(); ?>