<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Staticpageimages Model
 *
 * @property \App\Model\Table\StaticpageTable|\Cake\ORM\Association\BelongsTo $Staticpage
 *
 * @method \App\Model\Entity\Staticpageimages get($primaryKey, $options = [])
 * @method \App\Model\Entity\Staticpageimages newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Staticpageimages[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Staticpageimages|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Staticpageimages patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Staticpageimages[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Staticpageimages findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StaticpageimagesTable extends Table
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

        $this->setTable('staticpageimages');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Staticpage', [
            'foreignKey' => 'staticpage_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('filename')
            ->maxLength('filename', 255)
            ->requirePresence('filename', 'create')
            ->notEmpty('filename');

        $validator
            ->scalar('relative_path')
            ->maxLength('relative_path', 255)
            ->requirePresence('relative_path', 'create')
            ->notEmpty('relative_path');

        $validator
            ->scalar('dir')
            ->maxLength('dir', 255)
            ->requirePresence('dir', 'create')
            ->notEmpty('dir');

        $validator
            ->scalar('type')
            ->maxLength('type', 255)
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->scalar('size')
            ->maxLength('size', 255)
            ->requirePresence('size', 'create')
            ->notEmpty('size');

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
        $rules->add($rules->existsIn(['staticpage_id'], 'Staticpage'));

        return $rules;
    }
}
