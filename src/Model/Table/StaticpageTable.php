<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Staticpage Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\MenuTable|\Cake\ORM\Association\BelongsTo $Menu
 * @property \App\Model\Table\StaticpageimagesTable|\Cake\ORM\Association\HasMany $Staticpageimages
 *
 * @method \App\Model\Entity\Staticpage get($primaryKey, $options = [])
 * @method \App\Model\Entity\Staticpage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Staticpage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Staticpage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Staticpage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Staticpage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Staticpage findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StaticpageTable extends Table
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

        $this->setTable('staticpage');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Menu', [
            'foreignKey' => 'menu_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Staticpageimages', [
            'foreignKey' => 'staticpage_id'
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 255)
            ->requirePresence('slug', 'create')
            ->notEmpty('slug')
            ->add('slug', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('body')
            ->requirePresence('body', 'create')
            ->notEmpty('body');

        $validator
            ->scalar('image_path')
            ->maxLength('image_path', 255)
            ->requirePresence('image_path', 'create')
            ->notEmpty('image_path');

        $validator
            ->boolean('is_published')
            ->requirePresence('is_published', 'create')
            ->notEmpty('is_published');

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
        $rules->add($rules->isUnique(['slug']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['menu_id'], 'Menu'));

        return $rules;
    }
}
