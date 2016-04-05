<?php
namespace App\Controller\Admin;

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
        $this->paginate = [
            'contain' => ['Types', 'Regions', 'Families']
        ];
        $serviceFacilities = $this->paginate($this->ServiceFacilities);

        $this->set(compact('serviceFacilities'));
        $this->set('_serialize', ['serviceFacilities']);
    }

    /**
     * View method
     *
     * @param string|null $id Service Facility id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $serviceFacility = $this->ServiceFacilities->get($id, [
            'contain' => ['Types', 'Regions']
        ]);

        $this->set('serviceFacility', $serviceFacility);
        $this->set('_serialize', ['serviceFacility']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $serviceFacility = $this->ServiceFacilities->newEntity();
        if ($this->request->is('post')) {
            $serviceFacility = $this->ServiceFacilities->patchEntity($serviceFacility, $this->request->data);
            if ($this->ServiceFacilities->save($serviceFacility)) {
                $this->Flash->success(__('The service facility has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                if (!empty($serviceFacility->family_id) && is_numeric($serviceFacility->family_id)){
                   $types = $this->getTypesList($serviceFacility->family_id, 'query'); 
                   $this->set(compact('types'));
                }
                $this->Flash->error(__('The service facility could not be saved. Please, try again.'));
            }
        }
        $families = $this->ServiceFacilities->Families->find('list', ['limit' => 200, 'order' => 'Families.family']);
        $regions = $this->ServiceFacilities->Regions->find('list', ['limit' => 200, 'order' => 'Regions.region']);
        $this->set(compact('serviceFacility', 'families', 'regions'));
        $this->set('_serialize', ['serviceFacility']);
        $this->viewBuilder()->template('add_edit_common');
    }

    /**
     * Edit method
     *
     * @param string|null $id Service Facility id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $serviceFacility = $this->ServiceFacilities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $serviceFacility = $this->ServiceFacilities->patchEntity($serviceFacility, $this->request->data);
            if ($this->ServiceFacilities->save($serviceFacility)) {
                $this->Flash->success(__('The service facility has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The service facility could not be saved. Please, try again.'));
            }
        }
        $families = $this->ServiceFacilities->Families->find('list', ['limit' => 200, 'order' => 'Families.family']);
        $types = $this->getTypesList($serviceFacility->family_id, 'query');
        $regions = $this->ServiceFacilities->Regions->find('list', ['limit' => 200, 'order' => 'Regions.region']);
        $this->set(compact('serviceFacility', 'families', 'types', 'regions'));
        $this->set('_serialize', ['serviceFacility']);
        $this->viewBuilder()->template('add_edit_common');
    }

    /**
     * Delete method
     *
     * @param string|null $id Service Facility id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $serviceFacility = $this->ServiceFacilities->get($id);
        if ($this->ServiceFacilities->delete($serviceFacility)) {
            $this->Flash->success(__('The service facility has been deleted.'));
        } else {
            $this->Flash->error(__('The service facility could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    
    /**
     * Get lists of types
     * @param int $familyId
     */
    public function getTypesList($familyId = null, $returnType = 'optionsHtml') {
        $query = $this->ServiceFacilities->Types->find('list')->order('Types.type');
        if (is_numeric($familyId)){
            $query->where(['family_id' => $familyId]);
        }
        if($returnType == 'query'){
            return $query;
        }
        if ($returnType == 'optionsHtml'){
            $optionsHtml = '<option>--Please Select--</option>';
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
}
