<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AccountingItems Model
 *
 * @method \App\Model\Entity\AccountingItem newEmptyEntity()
 * @method \App\Model\Entity\AccountingItem newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\AccountingItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AccountingItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\AccountingItem findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\AccountingItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AccountingItem[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AccountingItem|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AccountingItem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AccountingItem[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AccountingItem[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\AccountingItem[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AccountingItem[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AccountingItemsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('accounting_items');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('entries_per_month')
            ->maxLength('entries_per_month', 255)
            ->requirePresence('entries_per_month', 'create')
            ->notEmptyString('entries_per_month');

        $validator
            ->scalar('taxpayer_price')
            ->maxLength('taxpayer_price', 255)
            ->requirePresence('taxpayer_price', 'create')
            ->notEmptyString('taxpayer_price');

        $validator
            ->scalar('non_taxpayer_price')
            ->maxLength('non_taxpayer_price', 255)
            ->requirePresence('non_taxpayer_price', 'create')
            ->notEmptyString('non_taxpayer_price');

        $validator
            ->scalar('type')
            ->allowEmptyString('type');

        return $validator;
    }
}
