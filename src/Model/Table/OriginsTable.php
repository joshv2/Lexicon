<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Origins Model
 *
 * @property \App\Model\Table\WordsTable&\Cake\ORM\Association\BelongsToMany $Words
 *
 * @method \App\Model\Entity\Origin newEmptyEntity()
 * @method \App\Model\Entity\Origin newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Origin[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Origin get($primaryKey, $options = [])
 * @method \App\Model\Entity\Origin findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Origin patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Origin[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Origin|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Origin saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Origin[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Origin[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Origin[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Origin[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OriginsTable extends Table
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

        $this->setTable('origins');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Words', [
            'foreignKey' => 'origin_id',
            'targetForeignKey' => 'word_id',
            'joinTable' => 'origins_words',
        ]);
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('origin')
            ->maxLength('origin', 255)
            ->requirePresence('origin', 'create')
            ->notEmptyString('origin')
            ->add('origin', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['origin']), ['errorField' => 'origin']);

        return $rules;
    }
}
