<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Artikelimages Controller
 *
 * @property \App\Model\Table\ArtikelimagesTable $Artikelimages
 *
 * @method \App\Model\Entity\Artikelimages[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtikelimagesController extends AppController
{

    /**
     * beforeRender method
     *
     * @return \Cake\Http\Response|void
     */
     
    public function beforeRender(\Cake\Event\Event $event){
        
        $this->set(['judul'=>'Artikelimages']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Artikel']
        ];
        $artikelimages = $this->paginate($this->Artikelimages);

        $this->set(compact('artikelimages'));
    }

    /**
     * View method
     *
     * @param string|null $id Artikelimages id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artikelimages = $this->Artikelimages->get($id, [
            'contain' => ['Artikel']
        ]);

        $this->set('artikelimages', $artikelimages);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $artikelimages = $this->Artikelimages->newEntity();
        if ($this->request->is('post')) {
            $artikelimages = $this->Artikelimages->patchEntity($artikelimages, $this->request->getData());
            if ($this->Artikelimages->save($artikelimages)) {
                $this->Flash->success(__('The artikelimages has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artikelimages could not be saved. Please, try again.'));
        }
        $artikel = $this->Artikelimages->Artikel->find('list', ['limit' => 200]);
        $this->set(compact('artikelimages', 'artikel'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Artikelimages id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artikelimages = $this->Artikelimages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artikelimages = $this->Artikelimages->patchEntity($artikelimages, $this->request->getData());
            if ($this->Artikelimages->save($artikelimages)) {
                $this->Flash->success(__('The artikelimages has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artikelimages could not be saved. Please, try again.'));
        }
        $artikel = $this->Artikelimages->Artikel->find('list', ['limit' => 200]);
        $this->set(compact('artikelimages', 'artikel'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Artikelimages id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artikelimages = $this->Artikelimages->get($id);
        if ($this->Artikelimages->delete($artikelimages)) {
            $this->Flash->success(__('The artikelimages has been deleted.'));
        } else {
            $this->Flash->error(__('The artikelimages could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
