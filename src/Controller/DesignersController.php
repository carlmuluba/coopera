<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Designers Controller
 *
 * @property \App\Model\Table\DesignersTable $Designers
 */
class DesignersController extends AppController
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
        $designers = $this->paginate($this->Designers);

        $this->set(compact('designers'));
        $this->set('_serialize', ['designers']);
    }

    /**
     * View method
     *
     * @param string|null $id Designer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
      $this->viewBuilder()->layout('normal');

        $designer = $this->Designers->get($id, [
            'contain' => ['Users', 'Projects']
        ]);

        $this->set('designer', $designer);
        $this->set('_serialize', ['designer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
      $this->viewBuilder()->layout('normal');
        $designer = $this->Designers->newEntity();
        if ($this->request->is('post')) {
            $designer = $this->Designers->patchEntity($designer, $this->request->data);
            if ($this->Designers->save($designer)) {
                $this->Flash->success(__('The designer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The designer could not be saved. Please, try again.'));
            }
        }
        $users = $this->Designers->Users->find('list', ['limit' => 200]);
        $this->set(compact('designer', 'users'));
        $this->set('_serialize', ['designer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Designer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
      $this->viewBuilder()->layout('normal');
        $designer = $this->Designers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $designer = $this->Designers->patchEntity($designer, $this->request->data);
            if ($this->Designers->save($designer)) {
                $this->Flash->success(__('The designer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The designer could not be saved. Please, try again.'));
            }
        }
        $users = $this->Designers->Users->find('list', ['limit' => 200]);
        $this->set(compact('designer', 'users'));
        $this->set('_serialize', ['designer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Designer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
      $this->viewBuilder()->layout('normal');
        $this->request->allowMethod(['post', 'delete']);
        $designer = $this->Designers->get($id);
        if ($this->Designers->delete($designer)) {
            $this->Flash->success(__('The designer has been deleted.'));
        } else {
            $this->Flash->error(__('The designer could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
