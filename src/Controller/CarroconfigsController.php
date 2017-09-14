<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Carroconfigs Controller
 *
 * @property \App\Model\Table\CarroconfigsTable $Carroconfigs
 *
 * @method \App\Model\Entity\Carroconfig[] paginate($object = null, array $settings = [])
 */
class CarroconfigsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $carroconfigs = $this->paginate($this->Carroconfigs);

        $this->set(compact('carroconfigs'));
        $this->set('_serialize', ['carroconfigs']);
    }

    /**
     * View method
     *
     * @param string|null $id Carroconfig id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carroconfig = $this->Carroconfigs->get($id, [
            'contain' => []
        ]);

        $this->set('carroconfig', $carroconfig);
        $this->set('_serialize', ['carroconfig']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carroconfig = $this->Carroconfigs->newEntity();
        if ($this->request->is('post')) {
            $carroconfig = $this->Carroconfigs->patchEntity($carroconfig, $this->request->getData());
            if ($this->Carroconfigs->save($carroconfig)) {
                $this->Flash->success(__('The carroconfig has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carroconfig could not be saved. Please, try again.'));
        }
        $this->set(compact('carroconfig'));
        $this->set('_serialize', ['carroconfig']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Carroconfig id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carroconfig = $this->Carroconfigs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carroconfig = $this->Carroconfigs->patchEntity($carroconfig, $this->request->getData());
            if ($this->Carroconfigs->save($carroconfig)) {
                $this->Flash->success(__('The carroconfig has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carroconfig could not be saved. Please, try again.'));
        }
        $this->set(compact('carroconfig'));
        $this->set('_serialize', ['carroconfig']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Carroconfig id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carroconfig = $this->Carroconfigs->get($id);
        if ($this->Carroconfigs->delete($carroconfig)) {
            $this->Flash->success(__('The carroconfig has been deleted.'));
        } else {
            $this->Flash->error(__('The carroconfig could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
