<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Service Facilty <?php echo $serviceFacility->isNew() ? 'add' : 'edit'; ?></h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo $this->Url->build('/admin'); ?>">Home</a>
            </li>
            <li class="active">
                <a href="<?php echo $this->Url->build(['controller' => 'ServiceFacilities', 'action' => 'index']); ?>">
                    Types
                </a>
            </li>
            <?php if (!$serviceFacility->isNew()): ?>
                <li class="active">
                    <strong><?php echo $serviceFacility->facility_name; ?></strong>
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
                    <li class="active"><a data-toggle="tab" href="#tab-1"> Service Facilty info</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                             <?= $this->Form->create($serviceFacility, [
                                 'id' => 'service_fac_form',
                                 'templates'=>[
                                     'inputContainer' => '{{content}}',
                                     'label' => ''
                                     ]
                             ]) ?>
                            <fieldset class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Family:
                                        <span class="required">* </span>
                                    </label>
                                    <div class="col-sm-4">
                                        <?php  
                                        echo $this->Form->input('family_id', [
                                            'class' => 'form-control',
                                            'type' => 'select',
                                            'id' => 'family_drpdwn',
                                            'empty' => '--Please Select--',
                                            'options' => $families,
                                            'required' => true
                                        ]); ?>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Type:
                                         <span class="required">* </span>
                                    </label>
                                    <div class="col-sm-4">
                                        <?php  
                                        echo $this->Form->input('type_id', [
                                            'id' => 'type_drpdwn',
                                            'class' => 'form-control',
                                            'type' => 'select',
                                            'empty' => '--Please Select--',
                                            'options' => isset($types) ? $types : [],
                                            'required' => true
                                        ]); ?>
                                    </div>
                                      <div class="col-sm-2 initial_hide" id="types_loading">
                                            <i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Facility Name:
                                        <span class="required">* </span>
                                    </label>
                                    <div class="col-sm-10">
                                        <?php  echo $this->Form->input('facility_name', [
                                            'class' => 'form-control'
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Authorization:</label>
                                    <div class="col-sm-10">
                                        <?php  echo $this->Form->input('authorization', [
                                            'class' => 'form-control'
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Full Address:
                                        <span class="required">* </span>
                                    </label>
                                    <div class="col-sm-10">
                                        <?php  echo $this->Form->input('full_address', [
                                            'class' => 'form-control'
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Region:
                                        <span class="required">* </span>
                                    </label>
                                    <div class="col-sm-4">
                                        <?php  
                                        echo $this->Form->input('region_id', [
                                            'class' => 'form-control',
                                            'type' => 'select',
                                            'options' => $regions,
                                            'empty' => '--Please Select--',
                                            'required' => true
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Country:</label>
                                    <div class="col-sm-10">
                                        <?php  echo $this->Form->input('country', [
                                            'class' => 'form-control'
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">State:</label>
                                    <div class="col-sm-10">
                                        <?php  echo $this->Form->input('state', [
                                            'class' => 'form-control'
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">City:</label>
                                    <div class="col-sm-10">
                                        <?php  echo $this->Form->input('city', [
                                            'class' => 'form-control'
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Zip:</label>
                                    <div class="col-sm-10">
                                        <?php  echo $this->Form->input('zip', [
                                            'class' => 'form-control'
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Phone:</label>
                                    <div class="col-sm-10">
                                        <?php  echo $this->Form->input('phone', [
                                            'class' => 'form-control'
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">AOG Phone:</label>
                                    <div class="col-sm-10">
                                        <?php  echo $this->Form->input('aog_phone', [
                                            'class' => 'form-control'
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Secondary AOG Phone:</label>
                                    <div class="col-sm-10">
                                        <?php  echo $this->Form->input('secondary_aog_phone', [
                                            'class' => 'form-control'
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">ASF Excellence Award Winner:</label>
                                    <div class="col-sm-10">
                                        <?php  echo $this->Form->input('asf_excellence_award_winner', [
                                            'class' => 'form-control'
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">AOG Email:</label>
                                    <div class="col-sm-10">
                                        <?php  echo $this->Form->input('aog_email', [
                                            'type' => 'email',
                                            'class' => 'form-control'
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Website URL:</label>
                                    <div class="col-sm-10">
                                        <?php  echo $this->Form->input('website_url', [
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
                                            'options' => [1 => 'Active', 0 => 'Inactive']
                                        ]); ?>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a href="<?php echo $this->Url->build(['controller' => 'ServiceFacilities', 'action' => 'index']); ?>" class="btn btn-white">
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
<?php $this->start('scriptBottom'); ?>
    <script type="text/javascript">
        jQuery(document).ready(function($){
              $('#service_fac_form').validate({
                  rules: {
                      family_id: "required",
                      type_id: "required",
                      facility_name: {
                          required: true,
                          minlength: 5
                      },
                      region_id: "required",
                      website_url: {url: true}
                  }
              });
            //Get types
            $('#family_drpdwn').change(function(){
                var familyId= $(this).val();
                var $loading = $('#types_loading');
                $.ajax({
                    url: '<?php echo $this->Url->build(['controller'=>'ServiceFacilities','action'=>'getTypesList']);?>/'+familyId,
                    beforeSend: function() {
                        $loading.show();
                    },
                    complete: function() {
                         $loading.hide();
                    },
                    dataType: 'json',
                    success: function(json) {
                        if(json.status == 'success'){
                            $('#type_drpdwn').html(json.data);
                        }
                    }
		});
            });
        });
    </script>
<?php $this->end(); ?>