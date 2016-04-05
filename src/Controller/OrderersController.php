<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Orderers Controller
 *
 * @property \App\Model\Table\OrderersTable $Orderers
 */
class OrderersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
      $this->viewBuilder()->layout('normal');
        $this->paginate = [
            'contain' => ['Users']
        ];
        $orderers = $this->paginate($this->Orderers);

        $this->set(compact('orderers'));
        $this->set('_serialize', ['orderers']);
    }

    /**
     * View method
     *
     * @param string|null $id Orderer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
      $this->viewBuilder()->layout('normal');
        $orderer = $this->Orderers->get($id, [
            'contain' => ['Users', 'Projects']
        ]);

        $this->set('orderer', $orderer);
        $this->set('_serialize', ['orderer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
      $this->viewBuilder()->layout('normal');
        $orderer = $this->Orderers->newEntity();
        if ($this->request->is('post')) {
            $orderer = $this->Orderers->patchEntity($orderer, $this->request->data);
            if ($this->Orderers->save($orderer)) {
                $this->Flash->success(__('The orderer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The orderer could not be saved. Please, try again.'));
            }
        }
        $users = $this->Orderers->Users->find('list', ['limit' => 200]);
        $this->set(compact('orderer', 'users'));
        $this->set('_serialize', ['orderer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Orderer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
      $this->viewBuilder()->layout('normal');
        $orderer = $this->Orderers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderer = $this->Orderers->patchEntity($orderer, $this->request->data);
            if ($this->Orderers->save($orderer)) {
                $this->Flash->success(__('The orderer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The orderer could not be saved. Please, try again.'));
            }
        }
        $users = $this->Orderers->Users->find('list', ['limit' => 200]);
        $this->set(compact('orderer', 'users'));
        $this->set('_serialize', ['orderer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Orderer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
      $this->viewBuilder()->layout('normal');
        $this->request->allowMethod(['post', 'delete']);
        $orderer = $this->Orderers->get($id);
        if ($this->Orderers->delete($orderer)) {
            $this->Flash->success(__('The orderer has been deleted.'));
        } else {
            $this->Flash->error(__('The orderer could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
