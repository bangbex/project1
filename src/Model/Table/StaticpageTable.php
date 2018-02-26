<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Utility\Inflector;

/**
 * Staticpage Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\MenuTable|\Cake\ORM\Association\BelongsTo $Menu
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
        
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            //'autoload'=>true,
            // You can configure as many upload fields as possible,
            // where the pattern is `field` => `config`
            //
            // Keep in mind that while this plugin does not have any limits in terms of
            // number of files uploaded per request, you should keep this down in order
            // to decrease the ability of your users to block other requests.
            'image_path' => [
                 'nameCallback' => function ($data, $settings) {
                     //debug($data);
                     //debug($settings);
                     //debug( substr(md5(microtime()), 0, 8) . '-'  . strtolower($data['name']) );
                     //exit;
                     return substr(md5(microtime()), 0, 8) . '-'  . strtolower($data['name']) ;
                },
            ],
        ]);
      

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Menu', [
            'foreignKey' => 'menu_id',
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
            ->allowEmpty('body');

        $validator
            ->maxLength('image_path', 255)
            ->requirePresence('image_path', 'create')
            ->allowEmpty('image_path');

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
    
        
    public function beforeSave($event, $entity, $options){
        
        
        $entity->slug = $entity->id.'/'.Inflector::slug($entity->title);
        
        
    }
    
}
