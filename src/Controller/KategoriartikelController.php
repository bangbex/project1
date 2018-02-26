<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kategoriartikel Controller
 *
 * @property \App\Model\Table\KategoriartikelTable $Kategoriartikel
 *
 * @method \App\Model\Entity\Kategoriartikel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KategoriartikelController extends AppController
{
    
    public function beforeRender(\Cake\Event\Event $event){
        
        $this->set(['judul'=>'Kategori Artikel']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentKategoriartikel'],
            'order'=> ['Kategoriartikel.lft'=>'asc']
          
        ];
        $kategoriartikel = $this->paginate($this->Kategoriartikel);

        $this->set(compact('kategoriartikel'));
    }

    /**
     * View method
     *
     * @param string|null $id Kategoriartikel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kategoriartikel = $this->Kategoriartikel->get($id, [
            'contain' => ['ParentKategoriartikel', 'Artikel', 'ChildKategoriartikel']
        ]);

        $this->set('kategoriartikel', $kategoriartikel);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kategoriartikel = $this->Kategoriartikel->newEntity();
        if ($this->request->is('post')) {
            $kategoriartikel = $this->Kategoriartikel->patchEntity($kategoriartikel, $this->request->getData());
            if ($this->Kategoriartikel->save($kategoriartikel)) {
                $this->Flash->success(__('The kategoriartikel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kategoriartikel could not be saved. Please, try again.'));
        }
        $parentKategoriartikel = $this->Kategoriartikel->ParentKategoriartikel->find('list', ['limit' => 200]);
        $this->set(compact('kategoriartikel', 'parentKategoriartikel'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kategoriartikel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kategoriartikel = $this->Kategoriartikel->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kategoriartikel = $this->Kategoriartikel->patchEntity($kategoriartikel, $this->request->getData());
            if ($this->Kategoriartikel->save($kategoriartikel)) {
                $this->Flash->success(__('The kategoriartikel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kategoriartikel could not be saved. Please, try again.'));
        }
        $parentKategoriartikel = $this->Kategoriartikel->ParentKategoriartikel->find('list', ['limit' => 200]);
        $this->set(compact('kategoriartikel', 'parentKategoriartikel'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kategoriartikel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kategoriartikel = $this->Kategoriartikel->get($id);
        if ($this->Kategoriartikel->delete($kategoriartikel)) {
            $this->Flash->success(__('The kategoriartikel has been deleted.'));
        } else {
            $this->Flash->error(__('The kategoriartikel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
