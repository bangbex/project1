<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Dashboard Controller
 *
 * @property \App\Model\Table\DashboardTable $Dashboard
 *
 * @method \App\Model\Entity\Dashboard[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DashboardController extends AppController
{

    /**
     * beforeRender method
     *
     * @return \Cake\Http\Response|void
     */
     
    public function beforeRender(\Cake\Event\Event $event){
        
        $this->set(['judul'=>'Dashboard']);
    }
    
    public function initialize(){
        parent::initialize();
        //$this->Auth->allow();
        
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

    }

}
