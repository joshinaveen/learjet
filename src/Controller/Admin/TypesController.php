<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Types Controller
 *
 * @property \App\Model\Table\TypesTable $Types
 */
class TypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Families']
        ];
        $types = $this->paginate($this->Types);

        $this->set(compact('types'));
        $this->set('_serialize', ['types']);
    }

    /**
     * View method
     *
     * @param string|null $id Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $type = $this->Types->get($id, [
            'contain' => ['Families', 'ServiceCenters']
        ]);

        $this->set('type', $type);
        $this->set('_serialize', ['type']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $type = $this->Types->newEntity();
        if ($this->request->is('post')) {
            $type = $this->Types->patchEntity($type, $this->request->data);
            if ($this->Types->save($type)) {
                $this->Flash->success(__('The type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The type could not be saved. Please, try again.'));
            }
        }
        $families = $this->Types->Families->find('list', ['limit' => 200,'order' => 'Families.family']);
        $this->set(compact('type', 'families'));
        $this->set('_serialize', ['type']);
        $this->viewBuilder()->template('add_edit_common');
    }

    /**
     * Edit method
     *
     * @param string|null $id Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $type = $this->Types->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $type = $this->Types->patchEntity($type, $this->request->data);
            if ($this->Types->save($type)) {
                $this->Flash->success(__('The type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The type could not be saved. Please, try again.'));
            }
        }
        $families = $this->Types->Families->find('list', ['limit' => 200, 'order' => 'Families.family']);
        $this->set(compact('type', 'families'));
        $this->set('_serialize', ['type']);
        $this->viewBuilder()->template('add_edit_common');
    }

    /**
     * Delete method
     *
     * @param string|null $id Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $type = $this->Types->get($id);
        if ($this->Types->delete($type)) {
            $this->Flash->success(__('The type has been deleted.'));
        } else {
            $this->Flash->error(__('The type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
}
