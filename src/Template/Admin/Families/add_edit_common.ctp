<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Family <?php echo $family->isNew() ? 'add' : 'edit'; ?></h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo $this->Url->build('/admin'); ?>">Home</a>
            </li>
            <li class="active">
                <a href="<?php echo $this->Url->build(['controller' => 'Families', 'action' => 'index']); ?>">
                    Families
                </a>
            </li>
            <?php if (!$family->isNew()): ?>
                <li class="active">
                    <strong><?php echo $family->family; ?></strong>
                </li>
            <?php endif; ?>
        </ol>
    </div>
    <div class="col-lg-2"></div>
</div>
<?php echo $this->Flash->render(); ?>
<?php echo $this->Flash->render('auth'); ?>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1"> Family info</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                             <?= $this->Form->create($family, [
                                 'templates'=>[
                                     'inputContainer' => '{{content}}',
                                     'label' => ''
                                     ]
                             ]) ?>
                            <fieldset class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Family:</label>
                                    <div class="col-sm-10">
                                        <?php  echo $this->Form->input('family', [
                                            'class' => 'form-control'
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Status:</label>
                                    <div class="col-sm-4">
                                        <?php  echo $this->Form->input('active', [
                                            'class' => 'form-control',
                                            'type' => 'select',
                                            'default' => 1,
                                            'options' => [0 => 'Inactive', 1 => 'Active']
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a href="<?php echo $this->Url->build(['controller' => 'Families', 'action' => 'index']); ?>" class="btn btn-white">
                                            Cancel
                                        </a>
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </div>
                            </fieldset>
                            <?php echo $this->Form->end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>