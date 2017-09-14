<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Frutos Controller
 *
 * @property \App\Model\Table\FrutosTable $Frutos
 *
 * @method \App\Model\Entity\Fruto[] paginate($object = null, array $settings = [])
 */
class FrutosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $frutos = $this->paginate($this->Frutos);

        $this->set(compact('frutos'));
        $this->set('_serialize', ['frutos']);
    }

    /**
     * View method
     *
     * @param string|null $id Fruto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fruto = $this->Frutos->get($id, [
            'contain' => ['Albaranes', 'Almacenajes', 'Almacenes', 'Fcpconfigs', 'Pesadas']
        ]);

        $this->set('fruto', $fruto);
        $this->set('_serialize', ['fruto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fruto = $this->Frutos->newEntity();
        if ($this->request->is('post')) {
            $fruto = $this->Frutos->patchEntity($fruto, $this->request->getData());
            if ($this->Frutos->save($fruto)) {
                $this->Flash->success(__('The fruto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fruto could not be saved. Please, try again.'));
        }
        $this->set(compact('fruto'));
        $this->set('_serialize', ['fruto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fruto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fruto = $this->Frutos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fruto = $this->Frutos->patchEntity($fruto, $this->request->getData());
            if ($this->Frutos->save($fruto)) {
                $this->Flash->success(__('The fruto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fruto could not be saved. Please, try again.'));
        }
        $this->set(compact('fruto'));
        $this->set('_serialize', ['fruto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fruto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fruto = $this->Frutos->get($id);
        if ($this->Frutos->delete($fruto)) {
            $this->Flash->success(__('The fruto has been deleted.'));
        } else {
            $this->Flash->error(__('The fruto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
