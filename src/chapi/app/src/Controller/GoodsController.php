<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Goods Controller
 *
 * @property \App\Model\Table\GoodsTable $Goods
 *
 * @method \App\Model\Entity\Good[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GoodsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $goods = $this->paginate($this->Goods);

        $this->set(compact('goods'));
    }

    /**
     * View method
     *
     * @param string|null $id Good id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $good = $this->Goods->get($id, [
            'contain' => []
        ]);

        $this->set('good', $good);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $good = $this->Goods->newEntity();
        if ($this->request->is('post')) {
            $good = $this->Goods->patchEntity($good, $this->request->getData());
            if ($this->Goods->save($good)) {
                $this->Flash->success(__('The good has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The good could not be saved. Please, try again.'));
        }
        $this->set(compact('good'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Good id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $good = $this->Goods->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $good = $this->Goods->patchEntity($good, $this->request->getData());
            if ($this->Goods->save($good)) {
                $this->Flash->success(__('The good has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The good could not be saved. Please, try again.'));
        }
        $this->set(compact('good'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Good id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $good = $this->Goods->get($id);
        if ($this->Goods->delete($good)) {
            $this->Flash->success(__('The good has been deleted.'));
        } else {
            $this->Flash->error(__('The good could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /* 前処理　*/
    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
		$this->autoRender = false;
		$this->autoLayout = false;
    }
    
    /* 
     * /items 商品一覧　
    */
    public function goodsAllApi() {

        // JSONで戻します。
        $this->response->type('json');
    
        //DBから全件取得
        $goods = $this->Goods->find()->all()->toArray();

        //JSON表示
        $this->response->body(json_encode($goods,
                                            JSON_PRETTY_PRINT | 
                                            JSON_UNESCAPED_UNICODE));
    }

    /*
     * /items/{id} 商品詳細　
    */
    public function goodsDetailApi() {
        
        // JSONで戻します。
        $this->response->type('json');
    
        //商品IDをURLから取得
        $id = $this->request->param('goods_id');

        //パラメータ{id}がテーブルの範囲内か判定
        if (!$this->setAction('checkGoodsId', $id)) {
            echo("Goodsテーブルにid=". $id. "は存在しません。");
            exit;
        }
            
        //DBからIDで取得
        $goods = $this->Goods->find()->
            where(['id' => $id])->first();
    
        //JSON表示
        $this->response->body(json_encode($goods,
                                            JSON_PRETTY_PRINT | 
                                            JSON_UNESCAPED_UNICODE));
    }

    public function checkGoodsId($id) {

        //テーブルのIDの最大値、最小値取得
        $query = $this->Goods->find();
        $ret = $query->select(['max_id' => $query->func()->max('id'),
                               'min_id' => $query->func()->min('id')])->first();
        $max = $ret->max_id;
        $min = $ret->min_id;

        if ($id > $max || $id < $min) {
            return false;
        }
            return true;
    }

    /*
     * /items/search 商品検索　
    */
    public function goodsSearchApi() {

        // JSONで戻します。
        $this->response->type('json');
    
        //クエリパラメータ取得
        $name = $this->request->getQuery('name');
        $minprice = $this->request->getQuery('minprice');
        $maxprice = $this->request->getQuery('maxprice');
            
        //DBからIDで取得
        $goods = $this->Goods->find()->
            where(['name like'=>'%'.$name.'%'])->
            where(['price >=' => $minprice])->
            where(['price <=' => $maxprice])
            ->all();
    
        //JSON表示
        $this->response->body(json_encode($goods,
                                            JSON_PRETTY_PRINT | 
                                            JSON_UNESCAPED_UNICODE));
    }

}
