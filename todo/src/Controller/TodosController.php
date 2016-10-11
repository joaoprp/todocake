<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Todos Controller
 *
 * @property \App\Model\Table\TodosTable $Todos
 */
class TodosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $todos = $this->paginate($this->Todos);

        $this->set(compact('todos'));
        $this->set('_serialize', ['todos']);
    }

    /**
     * View method
     *
     * @param string|null $id Todo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $todo = $this->Todos->get($id, [
            'contain' => []
        ]);

        $this->set('todo', $todo);
        $this->set('_serialize', ['todo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $todo = $this->Todos->newEntity();
        if ($this->request->is('post')) {
            $todo = $this->Todos->patchEntity($todo, $this->request->data);
            if ($this->Todos->save($todo)) {
                return $this->redirect(['action' => 'view', $todo->id . '.json']);
            } else {
                return $this->redirect(['action' => 'view', '0.json']);
            }
        }
        $this->set(compact('todo'));
        $this->set('_serialize', ['todo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Todo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $todo = $this->Todos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $todo = $this->Todos->patchEntity($todo, $this->request->data);
            if ($this->Todos->save($todo)) {
                return $this->redirect(['action' => 'view', $todo->id . '.json']);
            } else {
                return $this->redirect(['action' => 'view', '0.json']);
            }
        }
        $this->set(compact('todo'));
        $this->set('_serialize', ['todo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Todo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $todo = $this->Todos->get($id);

        $this->Todos->delete($todo);

        return $this->redirect(['action' => 'index.json']);
    }
}
