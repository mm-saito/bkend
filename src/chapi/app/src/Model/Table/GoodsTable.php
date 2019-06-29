<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Goods Model
 *
 * @method \App\Model\Entity\Good get($primaryKey, $options = [])
 * @method \App\Model\Entity\Good newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Good[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Good|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Good saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Good patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Good[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Good findOrCreate($search, callable $callback = null, $options = [])
 */
class GoodsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('goods');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->scalar('catch_copy')
            ->maxLength('catch_copy', 200)
            ->requirePresence('catch_copy', 'create')
            ->allowEmptyString('catch_copy', false);

        $validator
            ->integer('price')
            ->requirePresence('price', 'create')
            ->allowEmptyString('price', false);

        return $validator;
    }
}
