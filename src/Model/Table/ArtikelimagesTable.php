<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Artikelimages Model
 *
 * @property \App\Model\Table\ArtikelTable|\Cake\ORM\Association\BelongsTo $Artikel
 *
 * @method \App\Model\Entity\Artikelimages get($primaryKey, $options = [])
 * @method \App\Model\Entity\Artikelimages newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Artikelimages[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Artikelimages|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Artikelimages patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Artikelimages[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Artikelimages findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArtikelimagesTable extends Table
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

        $this->setTable('artikelimages');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Artikel', [
            'foreignKey' => 'artikel_id',
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
        $rules->add($rules->existsIn(['artikel_id'], 'Artikel'));

        return $rules;
    }
}
