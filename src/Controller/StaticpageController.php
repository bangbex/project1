<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Staticpage Controller
 *
 * @property \App\Model\Table\StaticpageTable $Staticpage
 *
 * @method \App\Model\Entity\Staticpage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StaticpageController extends AppController
{

    /**
     * beforeRender method
     *
     * @return \Cake\Http\Response|void
     */
     
    public function beforeRender(\Cake\Event\Event $event){
        
        $this->set(['judul'=>'Staticpage']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Menu']
        ];
        $staticpage = $this->paginate($this->Staticpage);

        $this->set(compact('staticpage'));
    }

    /**
     * View method
     *
     * @param string|null $id Staticpage id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $staticpage = $this->Staticpage->get($id, [
            'contain' => ['Users', 'Menu', 'Staticpageimages']
        ]);

        $this->set('staticpage', $staticpage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $staticpage = $this->Staticpage->newEntity();
        if ($this->request->is('post')) {
            $staticpage = $this->Staticpage->patchEntity($staticpage, $this->request->getData());
            if ($this->Staticpage->save($staticpage)) {
                $this->Flash->success(__('The staticpage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The staticpage could not be saved. Please, try again.'));
        }
        $users = $this->Staticpage->Users->find('list', ['limit' => 200]);
        $menu = $this->Staticpage->Menu->find('list', ['limit' => 200]);
        $this->set(compact('staticpage', 'users', 'menu'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Staticpage id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $staticpage = $this->Staticpage->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $staticpage = $this->Staticpage->patchEntity($staticpage, $this->request->getData());
            if ($this->Staticpage->save($staticpage)) {
                $this->Flash->success(__('The staticpage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The staticpage could not be saved. Please, try again.'));
        }
        $users = $this->Staticpage->Users->find('list', ['limit' => 200]);
        $menu = $this->Staticpage->Menu->find('list', ['limit' => 200]);
        $this->set(compact('staticpage', 'users', 'menu'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Staticpage id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $staticpage = $this->Staticpage->get($id);
        if ($this->Staticpage->delete($staticpage)) {
            $this->Flash->success(__('The staticpage has been deleted.'));
        } else {
            $this->Flash->error(__('The staticpage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
