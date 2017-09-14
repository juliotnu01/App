<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fcpconfigs Controller
 *
 * @property \App\Model\Table\FcpconfigsTable $Fcpconfigs
 *
 * @method \App\Model\Entity\Fcpconfig[] paginate($object = null, array $settings = [])
 */
class FcpconfigsController extends AppController
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
        $fcpconfigs = $this->paginate($this->Fcpconfigs);

        $this->set(compact('fcpconfigs'));
        $this->set('_serialize', ['fcpconfigs']);
    }

    /**
     * View method
     *
     * @param string|null $id Fcpconfig id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fcpconfig = $this->Fcpconfigs->get($id, [
            'contain' => ['Frutos', 'Categorias']
        ]);

        $this->set('fcpconfig', $fcpconfig);
        $this->set('_serialize', ['fcpconfig']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fcpconfig = $this->Fcpconfigs->newEntity();
        if ($this->request->is('post')) {
            $fcpconfig = $this->Fcpconfigs->patchEntity($fcpconfig, $this->request->getData());
            if ($this->Fcpconfigs->save($fcpconfig)) {
                $this->Flash->success(__('The fcpconfig has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fcpconfig could not be saved. Please, try again.'));
        }
        $frutos = $this->Fcpconfigs->Frutos->find('list', ['limit' => 200]);
        $categorias = $this->Fcpconfigs->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('fcpconfig', 'frutos', 'categorias'));
        $this->set('_serialize', ['fcpconfig']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fcpconfig id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fcpconfig = $this->Fcpconfigs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fcpconfig = $this->Fcpconfigs->patchEntity($fcpconfig, $this->request->getData());
            if ($this->Fcpconfigs->save($fcpconfig)) {
                $this->Flash->success(__('The fcpconfig has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fcpconfig could not be saved. Please, try again.'));
        }
        $frutos = $this->Fcpconfigs->Frutos->find('list', ['limit' => 200]);
        $categorias = $this->Fcpconfigs->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('fcpconfig', 'frutos', 'categorias'));
        $this->set('_serialize', ['fcpconfig']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fcpconfig id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fcpconfig = $this->Fcpconfigs->get($id);
        if ($this->Fcpconfigs->delete($fcpconfig)) {
            $this->Flash->success(__('The fcpconfig has been deleted.'));
        } else {
            $this->Flash->error(__('The fcpconfig could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
