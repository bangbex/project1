<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Artikel Controller
 *
 * @property \App\Model\Table\ArtikelTable $Artikel
 *
 * @method \App\Model\Entity\Artikel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtikelController extends AppController
{
    
    public function beforeRender(\Cake\Event\Event $event){
        
        $this->set(['judul'=>'Artikel']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Kategoriartikel']
        ];
        $artikel = $this->paginate($this->Artikel);

        $this->set(compact('artikel'));
    }

    /**
     * View method
     *
     * @param string|null $id Artikel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artikel = $this->Artikel->get($id, [
            'contain' => ['Users', 'Kategoriartikel']
        ]);

        $this->set('artikel', $artikel);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $artikel = $this->Artikel->newEntity();
        if ($this->request->is('post')) {
            $artikel = $this->Artikel->patchEntity($artikel, $this->request->getData());
            if ($this->Artikel->save($artikel)) {
                $this->Flash->success(__('The artikel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artikel could not be saved. Please, try again.'));
        }
        $users = $this->Artikel->Users->find('list', ['limit' => 200]);
        $kategoriartikel = $this->Artikel->Kategoriartikel->find('list', ['limit' => 200]);
        $this->set(compact('artikel', 'users', 'kategoriartikel'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Artikel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artikel = $this->Artikel->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artikel = $this->Artikel->patchEntity($artikel, $this->request->getData());
            if ($this->Artikel->save($artikel)) {
                $this->Flash->success(__('The artikel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artikel could not be saved. Please, try again.'));
        }
        $users = $this->Artikel->Users->find('list', ['limit' => 200]);
        $kategoriartikel = $this->Artikel->Kategoriartikel->find('list', ['limit' => 200]);
        $this->set(compact('artikel', 'users', 'kategoriartikel'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Artikel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artikel = $this->Artikel->get($id);
        if ($this->Artikel->delete($artikel)) {
            $this->Flash->success(__('The artikel has been deleted.'));
        } else {
            $this->Flash->error(__('The artikel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
