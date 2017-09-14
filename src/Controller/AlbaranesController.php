<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Albaranes Controller
 *
 * @property \App\Model\Table\AlbaranesTable $Albaranes
 *
 * @method \App\Model\Entity\Albarane[] paginate($object = null, array $settings = [])
 */
class AlbaranesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Productors', 'Frutos']
        ];
        $albaranes = $this->paginate($this->Albaranes);

        $this->set(compact('albaranes'));
        $this->set('_serialize', ['albaranes']);
    }

    /**
     * View method
     *
     * @param string|null $id Albarane id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $albarane = $this->Albaranes->get($id, [
            'contain' => ['Productors', 'Frutos', 'Pesadas']
        ]);

        $this->set('albarane', $albarane);
        $this->set('_serialize', ['albarane']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $albarane = $this->Albaranes->newEntity();
        if ($this->request->is('post')) {
            $albarane = $this->Albaranes->patchEntity($albarane, $this->request->getData());
            if ($this->Albaranes->save($albarane)) {
                $this->Flash->success(__('The albarane has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The albarane could not be saved. Please, try again.'));
        }
        $productors = $this->Albaranes->Productors->find('list', ['limit' => 200]);
        $frutos = $this->Albaranes->Frutos->find('list', ['limit' => 200]);
        $this->set(compact('albarane', 'productors', 'frutos'));
        $this->set('_serialize', ['albarane']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Albarane id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $albarane = $this->Albaranes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $albarane = $this->Albaranes->patchEntity($albarane, $this->request->getData());
            if ($this->Albaranes->save($albarane)) {
                $this->Flash->success(__('The albarane has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The albarane could not be saved. Please, try again.'));
        }
        $productors = $this->Albaranes->Productors->find('list', ['limit' => 200]);
        $frutos = $this->Albaranes->Frutos->find('list', ['limit' => 200]);
        $this->set(compact('albarane', 'productors', 'frutos'));
        $this->set('_serialize', ['albarane']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Albarane id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $albarane = $this->Albaranes->get($id);
        if ($this->Albaranes->delete($albarane)) {
            $this->Flash->success(__('The albarane has been deleted.'));
        } else {
            $this->Flash->error(__('The albarane could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
