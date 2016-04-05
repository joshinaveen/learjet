<div class="wrapper wrapper-content" id="search_form_cont">
    <div class="row">
        <div class="col-lg-7">
            <div class="ibox float-e-margins">
                <div class="ibox-title collapse-link" id="form_toggle">
                    <h5>Search <small>by Aircraft & Location</small></h5>
                    <div class="ibox-tools">
                        <a class="">
                            <i class="fa 
                             <?php echo isset($searchResults) && 
                             !$searchResults->isEmpty() ? 'fa-chevron-down' 
                             : 'fa-chevron-up'; ?>
                             ">
                            </i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" style="
                     <?php echo isset($searchResults) && 
                     !$searchResults->isEmpty() ? 'display: none;' : ''; ?>
                     ">
                    <?php echo $this->Form->create(null, [
                        'class' => 'form-horizontal',
                        'type' => 'get',
                        'id' => 'search_form',
                        'templates'=> [
                            'inputContainer' => '{{content}}',
                            'label' => ''
                            ]
                    ]); ?>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Family:</label>
                            <div class="col-lg-6">
                                 <?php
                                 $defFamilyId = $this->request->query('family_id');
                                 $defFamilyId = !is_null($defFamilyId) && is_numeric($defFamilyId) ? 
                                         $defFamilyId : '';
                                 echo $this->Form->input('family_id', [
                                     'class' => 'form-control',
                                     'type' => 'select',
                                     'id' => 'family_drpdwn',
                                     'empty' => '-- Please Select --',
                                     'options' => $families,
                                     'required' => true,
                                     'default' => $defFamilyId
                                ]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Type:</label>
                            <div class="col-lg-6">
                                 <?php
                                 $defTypeId = $this->request->query('type_id');
                                 $defTypeId = !is_null($defTypeId) && is_numeric($defTypeId) ? 
                                         $defTypeId : '';
                                 echo $this->Form->input('type_id', [
                                     'class' => 'form-control',
                                     'type' => 'select',
                                     'id' => 'type_drpdwn',
                                     'empty' => '-- Please Select --',
                                     'options' => isset($types) ? $types : [],
                                     'required' => true,
                                     'default' => $defTypeId
                                ]); ?>
                            </div>
                            <div class="col-sm-2 initial_hide" id="types_loading">
                                <i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Region:</label>
                            <div class="col-lg-6">
                                 <?php
                                 $defRegionId = $this->request->query('region_id');
                                 $defRegionId = !is_null($defRegionId) && is_numeric($defRegionId) ? 
                                         $defRegionId : '';
                                 echo $this->Form->input('region_id', [
                                     'class' => 'form-control',
                                     'type' => 'select',
                                     'id' => 'region_drpdwn',
                                     'empty' => '-- Please Select --',
                                     'options' => $regions,
                                     'required' => true,
                                     'default' => $defRegionId
                                ]); ?>
                            </div>
                            <div class="col-sm-2 initial_hide" id="regions_loading">
                                <i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-6 pull-right">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                            <?php echo $this->Form->end(); ?>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php if (isset($searchResults)): ?>
<div class="wrapper wrapper-content" id="search_results">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <h2>
                        <strong class="text-navy"><?php echo $searchResults->count(); ?></strong>
                        results found matching your query
                    </h2>
                    <div class="hr-line-dashed"></div>
                    <?php if (!empty($searchResults)): ?>
                    <?php 
                    foreach ($searchResults as $result) : ?>
                    <div class="search-result">
                        <h3><?php echo $result->facility_name; ?></h3>
                        <?php if (!empty($result->website_url)): ?>
                            <a href="<?php echo $result->website_url; ?>" target="_blank" 
                               class="search-link"><?php echo $result->website_url; ?>
                            </a>
                        <?php endif; ?>
                        <p><?php echo nl2br($result->full_address); ?></p>
                        <p>
                            <?php echo '<strong>Region:</strong> '.$result->region->region; ?><br/>
                            <?php $fields = ['asf_excellence_award_winner', 'authorization',
                                'country', 'city', 'phone', 'zip', 'aog_email',
                                'aog_phone', 'secondary_aog_phone'];
                            foreach ($fields as $column){
                                if (!empty($result->{$column})){
                                    echo '<strong>'.ucfirst(str_replace('_', ' ',$column))
                                            .': </strong>'
                                            .$result->{$column}.'<br/>';
                                }
                            }
                            ?>
                        </p>
                        <div class="hr-line-dashed"></div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <?php echo $this->element('pagination'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; //--isset $searchResults--//?>
<?php $this->start('scriptBottom'); ?>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            //Get types
            $('#family_drpdwn').change(function(){
                var familyId= $(this).val();
                var $loading = $('#types_loading');
                $.ajax({
                    url: '<?php echo $this->Url->build(['controller'=>'ServiceFacilities','action'=>'getTypes']);?>/'+familyId,
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