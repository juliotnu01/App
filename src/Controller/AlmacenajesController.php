<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Almacenajes Controller
 *
 * @property \App\Model\Table\AlmacenajesTable $Almacenajes
 *
 * @method \App\Model\Entity\Almacenaje[] paginate($object = null, array $settings = [])
 */
class AlmacenajesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Almacenes', 'Frutos', 'Categorias']
        ];
        $almacenajes = $this->paginate($this->Almacenajes);

        $this->set(compact('almacenajes'));
        $this->set('_serialize', ['almacenajes']);
    }

    /**
     * View method
     *
     * @param string|null $id Almacenaje id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $almacenaje = $this->Almacenajes->get($id, [
            'contain' => ['Almacenes', 'Frutos', 'Categorias']
        ]);

        $this->set('almacenaje', $almacenaje);
        $this->set('_serialize', ['almacenaje']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $almacenaje = $this->Almacenajes->newEntity();
        if ($this->request->is('post')) {
            $almacenaje = $this->Almacenajes->patchEntity($almacenaje, $this->request->getData());
            if ($this->Almacenajes->save($almacenaje)) {
                $this->Flash->success(__('The almacenaje has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The almacenaje could not be saved. Please, try again.'));
        }
        $almacenes = $this->Almacenajes->Almacenes->find('list', ['limit' => 200]);
        $frutos = $this->Almacenajes->Frutos->find('list', ['limit' => 200]);
        $categorias = $this->Almacenajes->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('almacenaje', 'almacenes', 'frutos', 'categorias'));
        $this->set('_serialize', ['almacenaje']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Almacenaje id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $almacenaje = $this->Almacenajes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $almacenaje = $this->Almacenajes->patchEntity($almacenaje, $this->request->getData());
            if ($this->Almacenajes->save($almacenaje)) {
                $this->Flash->success(__('The almacenaje has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The almacenaje could not be saved. Please, try again.'));
        }
        $almacenes = $this->Almacenajes->Almacenes->find('list', ['limit' => 200]);
        $frutos = $this->Almacenajes->Frutos->find('list', ['limit' => 200]);
        $categorias = $this->Almacenajes->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('almacenaje', 'almacenes', 'frutos', 'categorias'));
        $this->set('_serialize', ['almacenaje']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Almacenaje id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $almacenaje = $this->Almacenajes->get($id);
        if ($this->Almacenajes->delete($almacenaje)) {
            $this->Flash->success(__('The almacenaje has been deleted.'));
        } else {
            $this->Flash->error(__('The almacenaje could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
