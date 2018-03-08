<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Staticpageimages Controller
 *
 * @property \App\Model\Table\StaticpageimagesTable $Staticpageimages
 *
 * @method \App\Model\Entity\Staticpageimages[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StaticpageimagesController extends AppController
{

    /**
     * beforeRender method
     *
     * @return \Cake\Http\Response|void
     */
     
    public function beforeRender(\Cake\Event\Event $event){
        
        $this->set(['judul'=>'Staticpageimages']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Staticpage']
        ];
        $staticpageimages = $this->paginate($this->Staticpageimages);

        $this->set(compact('staticpageimages'));
    }

    /**
     * View method
     *
     * @param string|null $id Staticpageimages id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $staticpageimages = $this->Staticpageimages->get($id, [
            'contain' => ['Staticpage']
        ]);

        $this->set('staticpageimages', $staticpageimages);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $staticpageimages = $this->Staticpageimages->newEntity();
        if ($this->request->is('post')) {
            $staticpageimages = $this->Staticpageimages->patchEntity($staticpageimages, $this->request->getData());
            if ($this->Staticpageimages->save($staticpageimages)) {
                $this->Flash->success(__('The staticpageimages has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The staticpageimages could not be saved. Please, try again.'));
        }
        $staticpage = $this->Staticpageimages->Staticpage->find('list', ['limit' => 200]);
        $this->set(compact('staticpageimages', 'staticpage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Staticpageimages id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $staticpageimages = $this->Staticpageimages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $staticpageimages = $this->Staticpageimages->patchEntity($staticpageimages, $this->request->getData());
            if ($this->Staticpageimages->save($staticpageimages)) {
                $this->Flash->success(__('The staticpageimages has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The staticpageimages could not be saved. Please, try again.'));
        }
        $staticpage = $this->Staticpageimages->Staticpage->find('list', ['limit' => 200]);
        $this->set(compact('staticpageimages', 'staticpage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Staticpageimages id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $staticpageimages = $this->Staticpageimages->get($id);
        if ($this->Staticpageimages->delete($staticpageimages)) {
            $this->Flash->success(__('The staticpageimages has been deleted.'));
        } else {
            $this->Flash->error(__('The staticpageimages could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
