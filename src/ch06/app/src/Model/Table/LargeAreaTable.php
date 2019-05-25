<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LargeArea Model
 *
 * @property \App\Model\Table\PrefectureTable|\Cake\ORM\Association\BelongsTo $Prefecture
 *
 * @method \App\Model\Entity\LargeArea get($primaryKey, $options = [])
 * @method \App\Model\Entity\LargeArea newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LargeArea[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LargeArea|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LargeArea saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LargeArea patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LargeArea[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LargeArea findOrCreate($search, callable $callback = null, $options = [])
 */
class LargeAreaTable extends Table
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

        $this->setTable('large_area');
        $this->setDisplayField('name');

        $this->belongsTo('Prefecture', [
            'foreignKey' => 'prefecture_id',
            'joinType' => 'INNER'
        ]);
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
            ->scalar('name')
            ->maxLength('name', 20)
            ->allowEmptyString('name');

        $validator
            ->scalar('prefecture_name')
            ->maxLength('prefecture_name', 20)
            ->allowEmptyString('prefecture_name');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['prefecture_id'], 'Prefecture'));

        return $rules;
    }
}
