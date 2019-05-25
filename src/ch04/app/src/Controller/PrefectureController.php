<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Prefecture Controller
 *
 * @property \App\Model\Table\PrefectureTable $Prefecture
 *
 * @method \App\Model\Entity\Prefecture[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PrefectureController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $prefecture = $this->paginate($this->Prefecture);

        $this->set(compact('prefecture'));
    }

    /**
     * View method
     *
     * @param string|null $id Prefecture id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        //Cityテーブルと結合
        $prefecture = $this->Prefecture->get($id, [
            'contain' => ['City']
        ]);
        
        $this->set('prefecture', $prefecture);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prefecture = $this->Prefecture->newEntity();
        if ($this->request->is('post')) {
            $prefecture = $this->Prefecture->patchEntity($prefecture, $this->request->getData());
            if ($this->Prefecture->save($prefecture)) {
                $this->Flash->success(__('The prefecture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prefecture could not be saved. Please, try again.'));
        }
        $this->set(compact('prefecture'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prefecture id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prefecture = $this->Prefecture->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prefecture = $this->Prefecture->patchEntity($prefecture, $this->request->getData());
            if ($this->Prefecture->save($prefecture)) {
                $this->Flash->success(__('The prefecture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prefecture could not be saved. Please, try again.'));
        }
        $this->set(compact('prefecture'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prefecture id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prefecture = $this->Prefecture->get($id);
        if ($this->Prefecture->delete($prefecture)) {
            $this->Flash->success(__('The prefecture has been deleted.'));
        } else {
            $this->Flash->error(__('The prefecture could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
