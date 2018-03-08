<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Utility\Inflector;

/**
 * Users Model
 *
 * @property \App\Model\Table\RolesTable|\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\ArtikelTable|\Cake\ORM\Association\HasMany $Artikel
 * @property \App\Model\Table\StaticpageTable|\Cake\ORM\Association\HasMany $Staticpage
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'image' => [
                 'nameCallback' => function ($data, $settings) {
                         //debug($data);
                         //debug($settings);
                         //debug( substr(md5(microtime()), 0, 8) . '-'  . strtolower($data['name']) );
                         //exit;
                         $name = substr(md5(microtime()), 0, 8) . '-'  . strtolower($data['name']);
                         //return substr(md5(microtime()), 0, 8) . '-'  . strtolower($data['name']) ;
                         return $name;
                  },
                 'transformer'=> '\App\CustomClass\MyTransformer', 
                 'keepFilesOnDelete'=>false,
                 'deleteCallback'=>function($path, $entity, $field, $settings){
                        return [
                            $path.$entity->{$field},
                            $path.'thumb-'.$entity->{$field},
                            $path.'box-'.$entity->{$field},
                            $path.'landscape1-'.$entity->{$field},
                            $path.'landscape2-'.$entity->{$field},
                        ];
                  },
             ],
        ]);
      
        
        
        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Artikel', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Staticpage', [
            'foreignKey' => 'user_id'
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
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmpty('email');

        $validator
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->allowEmpty('image');
    
    
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
        $rules->add($rules->isUnique(['username']));
        //$rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));

        return $rules;
    }
    
    public function beforeSave($event, $entity, $options){
        
        //debug($entity);
        //exit;
    }
    
    public function isOwnedBy($dataId, $userId)
    {
        //return $this->exists(['id' => $dataId, 'id' => $userId]);
        
        return $dataId == $userId;
    }   


    
}
