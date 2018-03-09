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
        
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'thefilename' => [
                 'nameCallback' => function ($data, $settings) {
                         $name = substr(md5(microtime()), 0, 8) . '-'  . strtolower($data['name']);
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
