<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pesadas Controller
 *
 * @property \App\Model\Table\PesadasTable $Pesadas
 *
 * @method \App\Model\Entity\Pesada[] paginate($object = null, array $settings = [])
 */
class PesadasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Frutos', 'Albaranes', 'Categorias']
        ];
        $pesadas = $this->paginate($this->Pesadas);

        $this->set(compact('pesadas'));
        $this->set('_serialize', ['pesadas']);
    }

    /**
     * View method
     *
     * @param string|null $id Pesada id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pesada = $this->Pesadas->get($id, [
            'contain' => ['Frutos', 'Albaranes', 'Categorias']
        ]);

        $this->set('pesada', $pesada);
        $this->set('_serialize', ['pesada']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pesada = $this->Pesadas->newEntity();
        if ($this->request->is('post')) {
            $pesada = $this->Pesadas->patchEntity($pesada, $this->request->getData());
            if ($this->Pesadas->save($pesada)) {
                $this->Flash->success(__('The pesada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pesada could not be saved. Please, try again.'));
        }
        $frutos = $this->Pesadas->Frutos->find('list', ['limit' => 200]);
        $albaranes = $this->Pesadas->Albaranes->find('list', ['limit' => 200]);
        $categorias = $this->Pesadas->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('pesada', 'frutos', 'albaranes', 'categorias'));
        $this->set('_serialize', ['pesada']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pesada id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pesada = $this->Pesadas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pesada = $this->Pesadas->patchEntity($pesada, $this->request->getData());
            if ($this->Pesadas->save($pesada)) {
                $this->Flash->success(__('The pesada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pesada could not be saved. Please, try again.'));
        }
        $frutos = $this->Pesadas->Frutos->find('list', ['limit' => 200]);
        $albaranes = $this->Pesadas->Albaranes->find('list', ['limit' => 200]);
        $categorias = $this->Pesadas->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('pesada', 'frutos', 'albaranes', 'categorias'));
        $this->set('_serialize', ['pesada']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pesada id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pesada = $this->Pesadas->get($id);
        if ($this->Pesadas->delete($pesada)) {
            $this->Flash->success(__('The pesada has been deleted.'));
        } else {
            $this->Flash->error(__('The pesada could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
