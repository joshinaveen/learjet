<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ServiceFacilities Controller
 *
 * @property \App\Model\Table\ServiceFacilitiesTable $ServiceFacilities
 */
class ServiceFacilitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->_setSearchResults();
        $families = $this->_familiesList();
        $regions = $this->ServiceFacilities->Regions->find('list')->order('Regions.region');
        $this->_setTypesList();
        $this->set(compact('families', 'regions'));
    }
    
    /**
     * Set families list to be used in view
     */
    protected function _familiesList(){
       $families = $this->ServiceFacilities->Families->find('list');
       $families->order(['Families.family' => 'asc']);
       $families->where(['Families.active' => 1]);
       return $families;
    }
    
    /**
     * types list of selected family in view
     */
    protected function _setTypesList(){
        $familyId = $this->request->query('family_id');
        if (!is_null($familyId) && is_numeric($familyId)){
            $this->set('types', $this->getTypes($familyId, 'query'));
        }
    }
    
    /**
     * Get types list
     * @param int $familyId
     * @param string optionsHtml
     */
    public function getTypes($familyId, $returnType = 'optionsHtml') {
        $query = $this->ServiceFacilities->Types->find('list')->order('Types.type')
                ->where(['Types.active' => 1]);
        if (is_numeric($familyId)){
            $query->where(['family_id' => $familyId]);
        }
        if($returnType == 'query'){
            return $query;
        }
        if ($returnType == 'optionsHtml'){
            $optionsHtml = '<option value="">--Please Select--</option>';
            $types = $query->toArray();
            if (!empty($types)){
                foreach ($types as $id => $type){
                    $optionsHtml .= '<option value="'.$id.'">'.$type.'</option>';
                } 
            }
            if ($this->request->is('ajax')){
                echo json_encode(['status' => 'success', 'data' => $optionsHtml]);
                exit;
            }
            return $optionsHtml;
        }
        
        return '';
    }
    
    /**
     * filter service facilities based on get parameters and set result as
     *  view variable
     */
    protected function _setSearchResults(){
        $familyId = $this->request->query('family_id');
        $typeId = $this->request->query('type_id');
        $regionId = $this->request->query('region_id');
        
        if( is_numeric($familyId) && $familyId > 0 && is_numeric($typeId) 
                && $typeId > 0 && is_numeric($regionId) && $regionId > 0 ){
            $searchResults = $this->ServiceFacilities->find()
                    ->where([
                        'ServiceFacilities.active' => 1,
                        'ServiceFacilities.family_id' => $familyId,
                        'ServiceFacilities.type_id' => $typeId,
                        'ServiceFacilities.region_id' => $regionId
                    ])
                    ->contain([
                        'Regions' => function ($q){
                            return $q->select('region');
                        },'Families' =>  function ($q){
                            return $q->select('family');
                        },'Types' => function ($q){
                            return $q->select('type');
                        }]);
            //$this->set('resultsCount', $searchResults->count());
            //$this->paginate = ['limit' => 20];
            $this->set('searchResults', $searchResults);
        }
       
    }
    
}
