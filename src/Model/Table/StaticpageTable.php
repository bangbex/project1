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
                         debug($data);
                         debug($settings);
                         //debug( substr(md5(microtime()), 0, 8) . '-'  . strtolower($data['name']) );
                         exit;
                         return substr(md5(microtime()), 0, 8) . '-'  . strtolower($data['name']) ;
                    },
                  'transformer'=>function (\Cake\Datasource\RepositoryInterface $table, \Cake\Datasource\EntityInterface $entity, $data, $field, $settings){
                        // get the extension from the file
                        // there could be better ways to do this, and it will fail
                        // if the file has no extension
                        
                        
                        $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
                        // Store the thumbnail in a temporary file

                        // Use the Imagine library to DO THE THING
                        $imagine = new \Imagine\Gd\Imagine();
                        
                        // Save that modified file to our temp file
                        $thumb_36x36 = tempnam(sys_get_temp_dir(), 'thumb_36x36') . '.' . $extension;
                        $imagine->open($data['tmp_name'])
                                ->thumbnail(new \Imagine\Image\Box(36, 36), \Imagine\Image\ImageInterface::THUMBNAIL_INSET)
                                ->save($thumb_36x36);
                        //resize 1 530 x 384
                        $resize_530x384 = tempnam(sys_get_temp_dir(), 'resize_530x384') . '.' . $extension;
                        $imagine->open($data['tmp_name'])
                                ->resize( new \Imagine\Image\Box(530, 384) , \Imagine\Image\ImageInterface::FILTER_UNDEFINED)
                                ->save($resize_530x384);
                        //resize 2 1010 x 596
                        $resize_1010x596 = tempnam(sys_get_temp_dir(), 'resize_1010x596') . '.' . $extension;
                        $imagine->open($data['tmp_name'])
                                ->resize( new \Imagine\Image\Box(1010, 596) , \Imagine\Image\ImageInterface::FILTER_UNDEFINED)
                                ->save($resize_1010x596);
                        //resize 3 1106 x 758
                        $resize_1106x758 = tempnam(sys_get_temp_dir(), 'resize_1106x758') . '.' . $extension;
                        $imagine->open($data['tmp_name'])
                                ->resize( new \Imagine\Image\Box(1106, 758) , \Imagine\Image\ImageInterface::FILTER_UNDEFINED)
                                ->save($resize_1106x758);
                        //resize 4 874 x 610
                        $resize_874x610 = tempnam(sys_get_temp_dir(), 'resize_874x610') . '.' . $extension;
                        $imagine->open($data['tmp_name'])
                                ->resize( new \Imagine\Image\Box(874, 610) , \Imagine\Image\ImageInterface::FILTER_UNDEFINED)
                                ->save($resize_874x610);
                        //resize 5 437 x 280
                        $resize_437x280 = tempnam(sys_get_temp_dir(), 'resize_437x280') . '.' . $extension;
                        $imagine->open($data['tmp_name'])
                                ->resize( new \Imagine\Image\Box(437, 280) , \Imagine\Image\ImageInterface::FILTER_UNDEFINED)
                                ->save($resize_437x280);
                        
                        // Now return the original *and* the thumbnail
                        return [
                            //$data['tmp_name'] => $data['name'],
                            //$tmp => 'thumbnail-' . $data['name'],
                            //$data['tmp_name'] => $data['name'],
                            $thumb_36x36 => 'thumb-' . $data['name'],
                            $resize_437x280 => 'resize1-' . $data['name'],
                            $resize_530x384 => 'resize2-' . $data['name'],
                            $resize_874x610 => 'resize3-' . $data['name'],
                            $resize_1010x596 => 'resize4-' . $data['name'],
                            $resize_1106x758 => 'resize5-' . $data['name'],
                        ];
                      
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
