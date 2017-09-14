<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Almacenes Controller
 *
 * @property \App\Model\Table\AlmacenesTable $Almacenes
 *
 * @method \App\Model\Entity\Almacene[] paginate($object = null, array $settings = [])
 */
class AlmacenesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Frutos', 'Categorias']
        ];
        $almacenes = $this->paginate($this->Almacenes);

        $this->set(compact('almacenes'));
        $this->set('_serialize', ['almacenes']);
    }

    /**
     * View method
     *
     * @param string|null $id Almacene id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $almacene = $this->Almacenes->get($id, [
            'contain' => ['Frutos', 'Categorias', 'Almacenajes']
        ]);

        $this->set('almacene', $almacene);
        $this->set('_serialize', ['almacene']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $almacene = $this->Almacenes->newEntity();
        if ($this->request->is('post')) {
            $almacene = $this->Almacenes->patchEntity($almacene, $this->request->getData());
            if ($this->Almacenes->save($almacene)) {
                $this->Flash->success(__('The almacene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The almacene could not be saved. Please, try again.'));
        }
        $frutos = $this->Almacenes->Frutos->find('list', ['limit' => 200]);
        $categorias = $this->Almacenes->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('almacene', 'frutos', 'categorias'));
        $this->set('_serialize', ['almacene']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Almacene id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $almacene = $this->Almacenes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $almacene = $this->Almacenes->patchEntity($almacene, $this->request->getData());
            if ($this->Almacenes->save($almacene)) {
                $this->Flash->success(__('The almacene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The almacene could not be saved. Please, try again.'));
        }
        $frutos = $this->Almacenes->Frutos->find('list', ['limit' => 200]);
        $categorias = $this->Almacenes->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('almacene', 'frutos', 'categorias'));
        $this->set('_serialize', ['almacene']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Almacene id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $almacene = $this->Almacenes->get($id);
        if ($this->Almacenes->delete($almacene)) {
            $this->Flash->success(__('The almacene has been deleted.'));
        } else {
            $this->Flash->error(__('The almacene could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
