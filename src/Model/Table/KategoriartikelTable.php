<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kategoriartikel Model
 *
 * @property \App\Model\Table\KategoriartikelTable|\Cake\ORM\Association\BelongsTo $ParentKategoriartikel
 * @property \App\Model\Table\ArtikelTable|\Cake\ORM\Association\HasMany $Artikel
 * @property \App\Model\Table\KategoriartikelTable|\Cake\ORM\Association\HasMany $ChildKategoriartikel
 *
 * @method \App\Model\Entity\Kategoriartikel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kategoriartikel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Kategoriartikel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kategoriartikel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kategoriartikel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kategoriartikel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kategoriartikel findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @mixin \Cake\ORM\Behavior\TreeBehavior
 */
class KategoriartikelTable extends Table
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

        $this->setTable('kategoriartikel');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Tree');

        $this->belongsTo('ParentKategoriartikel', [
            'className' => 'Kategoriartikel',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('Artikel', [
            'foreignKey' => 'kategoriartikel_id'
        ]);
        $this->hasMany('ChildKategoriartikel', [
            'className' => 'Kategoriartikel',
            'foreignKey' => 'parent_id'
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->allowEmpty('description');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentKategoriartikel'));

        return $rules;
    }
}
