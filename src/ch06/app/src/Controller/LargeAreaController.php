<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LargeArea Controller
 *
 * @property \App\Model\Table\LargeAreaTable $LargeArea
 *
 * @method \App\Model\Entity\LargeArea[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LargeAreaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    //ページング設定
    public $paginate = [
        'limit' => 50
    ];
        

    public function index()
    {
        $largeArea = $this->paginate($this->LargeArea);

        $this->set(compact('largeArea'));
    }

    /**
     * View method
     *
     * @param string|null $id Large Area id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $largeArea = $this->LargeArea->get($id, [
            'contain' => ['Prefecture']
        ]);

        $this->set('largeArea', $largeArea);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $largeArea = $this->LargeArea->newEntity();
        if ($this->request->is('post')) {
            $largeArea = $this->LargeArea->patchEntity($largeArea, $this->request->getData());
            if ($this->LargeArea->save($largeArea)) {
                $this->Flash->success(__('The large area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The large area could not be saved. Please, try again.'));
        }
        $prefecture = $this->LargeArea->Prefecture->find('list', ['limit' => 200]);
        $this->set(compact('largeArea', 'prefecture'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Large Area id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $largeArea = $this->LargeArea->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $largeArea = $this->LargeArea->patchEntity($largeArea, $this->request->getData());
            if ($this->LargeArea->save($largeArea)) {
                $this->Flash->success(__('The large area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The large area could not be saved. Please, try again.'));
        }
        $prefecture = $this->LargeArea->Prefecture->find('list', ['limit' => 200]);
        $this->set(compact('largeArea', 'prefecture'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Large Area id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $largeArea = $this->LargeArea->get($id);
        if ($this->LargeArea->delete($largeArea)) {
            $this->Flash->success(__('The large area has been deleted.'));
        } else {
            $this->Flash->error(__('The large area could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
