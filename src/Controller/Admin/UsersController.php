<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * beforeRender method
     *
     * @return \Cake\Http\Response|void
     */
     
    public function beforeRender(\Cake\Event\Event $event){
        
        $this->set(['judul'=>'Users']);
    }
    
    public function initialize(){
        parent::initialize();
        $this->Auth->allow(['login','logout']);
        
    }
    
    public function isAuthorized($user){
        
        
        if($this->request->params['action'] == 'index'){
            return true;
        }
        if($this->request->params['action'] == 'edit'){
            $theUser = (int)$this->request->session()->read('Auth.User.id');
            $dataId = (int)$this->request->getParam('pass.0');
            
            if($this->Users->isOwnedBy($dataId, $theUser)){
                return true;
            }
        }
        
        return parent::isAuthorized($user);
    }
    
    
    /**
     * Login method
     *
     * @return \Cake\Http\Response|void
     */
    public function login()
    {
       //$this->layout =  false;
       $this->viewBuilder()->setLayout(false);
       
       if($this->request->is('post')){
           
           $user = $this->Auth->identify();
           if($user){
             $this->Auth->setUser($user);
             $this->Flash->success('Selamat datang');
             return $this->redirect($this->Auth->redirectUrl());
               
           }
           $this->Flash->error('kombinasi username dan password salah');
           
       }

    }
    
    /**
     * Login method
     *
     * @return \Cake\Http\Response|void
     */
    public function logout(){
        
        $this->Flash->success('Anda telah logout');
        return $this->redirect($this->Auth->logout());
        
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        
       // $x = new \App\CustomClass\MyTransformer();
       // $x->test();
        
        $this->paginate = [
            'contain' => ['Roles']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles', 'Artikel', 'Staticpage']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            //debug($this->request->getData());
            //debug($user);
            //exit;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
