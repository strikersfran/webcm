<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Noticias Controller
 *
 * @property \App\Model\Table\NoticiasTable $Noticias
 */
class NoticiasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {        
        $noticias = $this->paginate($this->Noticias);

        $this->set(compact('noticias'));
        $this->set('_serialize', ['noticias']);
    }
    
    public function display(){
        $this->viewBuilder()->layout('frontend');
        $noticias = $this->paginate($this->Noticias);

        $this->set(compact('noticias'));
        $this->set('_serialize', ['noticias']);
    }

    /**
     * View method
     *
     * @param string|null $id Noticia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $noticia = $this->Noticias->get($id, [
            'contain' => []
        ]);

        $this->set('noticia', $noticia);
        $this->set('_serialize', ['noticia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $noticia = $this->Noticias->newEntity();
        if ($this->request->is('post')) {
            $noticia = $this->Noticias->patchEntity($noticia, $this->request->data);
            if ($this->Noticias->save($noticia)) {
                $this->Flash->success(__('La noticia ha sido guardada.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('La noticia no pudo ser guardada. Por favor, intente de nuevo.'));
            }
        }
        $consejoscomunales = $this->Noticias->ConsejosComunales->find('list', ['limit' => 200]);
        $this->set(compact('noticia','consejoscomunales'));
        $this->set('_serialize', ['noticia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Noticia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $noticia = $this->Noticias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $noticia = $this->Noticias->patchEntity($noticia, $this->request->data);
            if ($this->Noticias->save($noticia)) {
                $this->Flash->success(__('La noticia ha sido guardada.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('La noticia no fue guardada. Porfavor, Intente de nuevo.'));
            }
        }
        $consejoscomunales = $this->Noticias->ConsejosComunales->find('list', ['limit' => 200]);
        $this->set(compact('noticia','consejoscomunales'));
        $this->set('_serialize', ['noticia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Noticia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $noticia = $this->Noticias->get($id);
        if ($this->Noticias->delete($noticia)) {
            $this->Flash->success(__('La noticia ha sido borrada.'));
        } else {
            $this->Flash->error(__('La noticia no ha sido borrada. Por favor, intente de nuevo.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
